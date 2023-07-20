<?php

namespace Opencart\Admin\Controller\Extension\Ol\Module;
use \Opencart\System\Helper AS Helper;

class Ol extends \Opencart\System\Engine\Controller {

    private $call_separator = VERSION < '4.0.2.0' ? '|' : '.';
    private $path = 'extension/ol/module/ol';

    public function index(): void {
        $this->load->language($this->path);

        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module')
        ];

        if (!isset($this->request->get['module_id'])) {
            $data['breadcrumbs'][] = [
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link($this->path, 'user_token=' . $this->session->data['user_token'])
            ];
        } else {
            $data['breadcrumbs'][] = [
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link($this->path, 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'])
            ];
        }

        if (!isset($this->request->get['module_id'])) {
            $data['save'] = $this->url->link($this->path . $this->call_separator . 'save', 'user_token=' . $this->session->data['user_token']);
        } else {
            $data['save'] = $this->url->link($this->path . $this->call_separator . 'save', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id']);
        }

        $data['back'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module');

        if (isset($this->request->get['module_id'])) {
            $this->load->model('setting/module');

            $module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
        }

        if (isset($module_info['name'])) {
            $data['name'] = $module_info['name'];
        } else {
            $data['name'] = '';
        }

        if (isset($module_info['geocode'])) {
            $data['geocode'] = $module_info['geocode'];
        } else {
            $data['geocode'] = '';
        }

        if (isset($module_info['zoom'])) {
            $data['zoom'] = $module_info['zoom'];
        } else {
            $data['zoom'] = 0;
        }

        if (isset($module_info['width'])) {
            $data['width'] = $module_info['width'];
        } else {
            $data['width'] = '100%';
        }

        if (isset($module_info['height'])) {
            $data['height'] = $module_info['height'];
        } else {
            $data['height'] = '200px';
        }

        if (isset($module_info['status'])) {
            $data['status'] = $module_info['status'];
        } else {
            $data['status'] = '';
        }

        if (isset($module_info['tag'])) {
            $data['tag'] = $module_info['tag'];
        } else {
            $data['tag'] = '';
        }

        if (isset($this->request->get['module_id'])) {
            $data['module_id'] = (int) $this->request->get['module_id'];
        } else {
            $data['module_id'] = 0;
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view($this->path, $data));
    }

    public function save(): void {
        $this->load->language($this->path);

        $json = [];

        if (!$this->user->hasPermission('modify', $this->path)) {
            $json['error']['warning'] = $this->language->get('error_permission');
        }

        if (VERSION < '4.0.2.0') {
            if ((Helper\Utf8\strlen($this->request->post['name']) < 3) || (Helper\Utf8\strlen($this->request->post['name']) > 64)) {
                $json['error']['name'] = $this->language->get('error_name');
            }
        } else {
            if ((oc_strlen($this->request->post['name']) < 3) || (oc_strlen($this->request->post['name']) > 64)) {
                $json['error']['name'] = $this->language->get('error_name');
            }
        }

        if (!$this->request->post['width']) {
            $json['error']['width'] = $this->language->get('error_width');
        }

        if (!$this->request->post['height']) {
            $json['error']['height'] = $this->language->get('error_height');
        }

        if (!$json) {
            $this->load->model('setting/module');

            if (!$this->request->post['module_id']) {
                $json['module_id'] = $this->model_setting_module->addModule('ol.ol', $this->request->post);
            } else {
                $this->model_setting_module->editModule($this->request->post['module_id'], $this->request->post);
            }

            $json['success'] = $this->language->get('text_success');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function install() {
        $this->load->model('setting/event');

        $this->model_setting_event->addEvent([
            'code' => 'ol',
            'description' => '',
            'trigger' => 'catalog/view/*/*/before',
            'action' => $this->path . $this->call_separator . 'openlayers',
            'status' => 1,
            'sort_order' => 1]);
    }

    public function uninstall() {
        $this->load->model('setting/event');

        $this->model_setting_event->deleteEventByCode('ol');
    }
}
