<?php

namespace Opencart\Admin\Controller\Extension\Maps\Module;

class Maps extends \Opencart\System\Engine\Controller

{
    private $path = 'extension/maps/module/maps';
    private $default_marker = "data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPCEtLSBDcmVhdGVkIHdpdGggSW5rc2NhcGUgKGh0dHA6Ly93d3cuaW5rc2NhcGUub3JnLykgLS0+Cjxzdmcgd2lkdGg9IjcuMTgxM21tIiBoZWlnaHQ9IjEwLjU4M21tIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA3LjE4MTMgMTAuNTgzIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgogPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTg1Ljg3MiAtMTQzLjAxKSI+CiAgPHBhdGggZD0ibTg5LjQ2MyAxNDMuMTFjLTEuOTMwNyAwLTMuNDg5NiAxLjU2MDUtMy40ODk2IDMuNDg1MyAwIDAuNjA1MjMgMC4xNTQ2NSAxLjE3NDcgMC40MjU3NiAxLjY3MDhsMy4wNjQgNS4xMjk1IDMuMDY0LTUuMTI5NWMwLjI3MTEtMC40OTYxNiAwLjQyNTc2LTEuMDY1NiAwLjQyNTc2LTEuNjcwOCAwLTEuOTI0OS0xLjU1ODktMy40ODUzLTMuNDg5Ni0zLjQ4NTN6bS0wLjAzODgxIDIuMDI1NWMwLjAxMjk1LTIuNmUtNCAwLjAyNTc4IDAgMC4wMzg4MSAwIDAuODM0MDIgMCAxLjUxMDEgMC42NzYxIDEuNTEwMSAxLjUxMDFzLTAuNjc2MTEgMS41MTAxLTEuNTEwMSAxLjUxMDFjLTAuODM0MDIgMC0xLjUxMDEtMC42NzYxMS0xLjUxMDEtMS41MTAxIDAtMC44MjA5OCAwLjY1NTMtMS40ODk0IDEuNDcxMy0xLjUxMDF6IiBmaWxsPSIjZTUyNjI2IiBzdHJva2U9IiMwMDAiIHN0cm9rZS13aWR0aD0iLjIwMTc4Ii8+CiA8L2c+Cjwvc3ZnPgo=";

    public function index(): void
    {
        $this->load->language($this->path);
        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token']),
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module'),
        ];

        if (!isset($this->request->get['module_id'])) {
            $data['breadcrumbs'][] = [
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link($this->path, 'user_token=' . $this->session->data['user_token']),
            ];
        } else {
            $data['breadcrumbs'][] = [
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link($this->path, 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id']),
            ];
        }

        if (!isset($this->request->get['module_id'])) {
            $data['save'] = $this->url->link($this->path . '.save', 'user_token=' . $this->session->data['user_token']);
        } else {
            $data['save'] = $this->url->link($this->path . '.save', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id']);
        }

        $data['back'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module');

        if (isset($this->request->get['module_id'])) {
            $this->load->model('setting/module');

            $module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
        }

        $data['config_file_max_size'] = ((int) preg_filter('/[^0-9]/', '', ini_get('upload_max_filesize')) * 1024 * 1024);

        $data['addItem'] = $this->url->link($this->path . '.addItem', 'user_token=' . $this->session->data['user_token']);
        $data['changeItem'] = $this->url->link($this->path . '.changeItem', 'user_token=' . $this->session->data['user_token']);
        $data['changeSource'] = $this->url->link($this->path . '.changeSource', 'user_token=' . $this->session->data['user_token']);

        if (isset($module_info)) {
            $data = array_merge($data, $module_info);
        } else {
            $data['m']['control'][uniqid()]['class'] = 'Attribution';
            $data['m']['control'][uniqid()]['class'] = 'Rotate';
            $data['m']['control'][uniqid()]['class'] = 'Zoom';

            $data['m']['interaction'][uniqid()]['class'] = 'DragRotate';
            $data['m']['interaction'][uniqid()]['class'] = 'DoubleClickZoom';
            $data['m']['interaction'][uniqid()]['class'] = 'DragPan';
            $data['m']['interaction'][uniqid()]['class'] = 'PinchRotate';
            $data['m']['interaction'][uniqid()]['class'] = 'PinchZoom';
            $data['m']['interaction'][uniqid()]['class'] = 'KeyboardPan';
            $data['m']['interaction'][uniqid()]['class'] = 'KeyboardZoom';
            $data['m']['interaction'][uniqid()]['class'] = 'MouseWheelZoom';
            $data['m']['interaction'][uniqid()]['class'] = 'DragZoom';

            $data['m']['layer'][uniqid()]['class'] = 'TileLayer';

            $data['m']['marker'][uniqid()]['class'] = 'Marker';
        }

        $data['classes']['control'] = $this->getTemplates('control');
        //$data['classes']['control'] = $this->getItemClasses('control');
        $data['classes']['interaction'] = $this->getItemClasses('interaction');
        $data['classes']['layer'] = $this->getItemClasses('layer');
        $data['classes']['source'] = $this->getItemClasses('source');

        foreach ($data['classes'] as $items) {
            foreach ($items as $class) {
                //       $data['classes_help'][$class] = $this->language->get('help_' . $class);
            }
        }
        //$data['classes_help'] = json_encode($data['classes_help']);

        $data['default_marker'] = $this->default_marker;

        $data['ip'] = 'extension/maps/admin/view/template/module/';
        $data['option'] = $data['ip'] . 'option.twig';

        $data['options'] = json_decode(
            file_get_contents(__DIR__ . '/options.json'),
            true
        );

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

    public function save(): void
    {
        $this->load->language($this->path);

        $json = [];

        if (!$this->user->hasPermission('modify', $this->path)) {
            $json['error']['warning'] = $this->language->get('error_permission');
        }

        if ((oc_strlen($this->request->post['name']) < 3) || (oc_strlen($this->request->post['name']) > 64)) {
            $json['error']['name'] = $this->language->get('error_name');
        }

        foreach ($_FILES['marker']['error'] as $key => $value) {
            switch ($value) {
                case 0:
                    $marker_mime = 'image/svg+xml';

                    $marker_tmp_name = $_FILES['marker']['tmp_name'][$key];
                    $marker_contents = file_get_contents($marker_tmp_name);
                    $marker_base64 = base64_encode($marker_contents);

                    $this->request->post['m']['marker'][$key]['img'] = 'data:' . $marker_mime . ';base64,' . $marker_base64;
                    break;
                case 2:
                    $json['error']['file'] = $this->language->get('error_upload_2');
                    break;
                case 4:
                    if (!isset($this->request->get['module_id'])) {
                        $this->request->post['m']['marker'][$key]['img'] = $this->default_marker;
                    } else {
                        $this->load->model('setting/module');
                        $module_info = $this->model_setting_module->getModule(
                            $this->request->get['module_id']
                        );

                        if (isset($module_info['m']['marker'][$key]['img'])) {
                            $this->request->post['m']['marker'][$key]['img'] = $module_info['m']['marker'][$key]['img'];
                        } else {
                            $this->request->post['m']['marker'][$key]['img'] = $this->default_marker;
                        }
                    }
                    break;
            }
        }

        if (!$this->request->post['width']) {
            $json['error']['width'] = $this->language->get('error_width');
        }

        if (!$this->request->post['height']) {
            $json['error']['height'] = $this->language->get('error_height');
        }

        if (isset($json['error']) && !isset($json['error']['warning'])) {
            $json['error']['warning'] = $this->language->get('error_warning');
        }

        if (!$json) {
            $this->load->model('setting/module');

            if (!$this->request->post['module_id']) {
                $json['module_id'] = $this->model_setting_module->addModule('maps.maps', $this->request->post);
            } else {
                $this->model_setting_module->editModule($this->request->post['module_id'], $this->request->post);
            }

            $json['success'] = $this->language->get('text_success');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function addItem(): void
    {
        $data['id'] = uniqid();
        $data['class'] = filter_input(INPUT_GET, 'class');

        if ($data['class'] == 'Marker') {
            $data['default_marker'] = $this->default_marker;
            $data['config_file_max_size'] = ((int) preg_filter('/[^0-9]/', '', ini_get('upload_max_filesize')) * 1024 * 1024);
        }

        $data['item'] = $this->getItem($data['class']);

        $data['classes'][$data['item']] = $this->getItemClasses($data['item']);

        $data['ip'] = 'extension/maps/admin/view/template/module/';
        $data['option'] = $data['ip'] . 'option.twig';

        $this->load->language($this->path);
        $this->response->setOutput($this->load->view(
            'extension/maps/module/item',
            $data
        ));
    }

    public function changeItem(): void
    {

        $data['id'] = filter_input(INPUT_GET, 'id');
        $data['class'] = filter_input(INPUT_GET, 'class');

        $data['item'] = $this->getItem($data['class']);

        $data['ip'] = 'extension/maps/admin/view/template/module/';
        $data['option'] = 'extension/maps/admin/view/template/module/option.twig';

        $this->load->language($this->path);
        $this->response->setOutput($this->load->view(
            'extension/maps/module/'
            . $data['item']
            . '/' . $data['class'],
            $data
        ));
    }

    private function getItemClasses($item)
    {

        $classes = glob(DIR_EXTENSION
            . 'maps/admin/view/template/module/' . $item
            . '/*.twig');

        array_walk($classes, function (&$value) {
            $value = pathinfo($value, PATHINFO_FILENAME);
        });

        return $classes;
    }

    private function getTemplates($item)
    {
        $classes = glob(DIR_EXTENSION
            . 'maps/admin/view/template/module/' . $item
            . '/*.twig');

        array_walk($classes, function (&$value) {
            $value = pathinfo($value, PATHINFO_FILENAME);
        });

        $this->load->language($this->path);

        foreach ($classes as $c) {
            $templates[$c]['help'] = $this->language->get('help_' . $c);
            $templates[$c]['template'] = $this->getTemplate($c);
        }

        return $templates;
    }

    private function getTemplate($class)
    {
        $data['id'] = uniqid();
        $data['class'] = $class;

        if ($data['class'] == 'Marker') {
            $data['default_marker'] = $this->default_marker;
            $data['config_file_max_size'] = ((int) preg_filter('/[^0-9]/', '', ini_get('upload_max_filesize')) * 1024 * 1024);
        }

        $data['item'] = $this->getItem($data['class']);

        $data['classes'][$data['item']] = $this->getItemClasses($data['item']);

        $data['ip'] = 'extension/maps/admin/view/template/module/';
        $data['option'] = $data['ip'] . 'option.twig';
        $data['options'] = json_decode(
            file_get_contents(__DIR__ . '/options.json'),
            true
        );

        $data['help'] = $this->language->get('help_' . $class);

        $this->load->language($this->path);
        return $this->load->view(
            'extension/maps/module/item',
            $data
        );
    }

    private function getItem($class)
    {

        if ($class == 'Marker') {
            return 'marker';
        }

        $classes = glob(DIR_EXTENSION
            . 'maps/admin/view/template/module/control/'
            . '*.twig');

        array_walk($classes, function (&$value) {
            $value = pathinfo($value, PATHINFO_FILENAME);
        });

        if (in_array($class, $classes)) {
            return 'control';
        }

        $classes = glob(DIR_EXTENSION
            . 'maps/admin/view/template/module/interaction/'
            . '*.twig');

        array_walk($classes, function (&$value) {
            $value = pathinfo($value, PATHINFO_FILENAME);
        });

        if (in_array($class, $classes)) {
            return 'interaction';
        }

        $classes = glob(DIR_EXTENSION
            . 'maps/admin/view/template/module/layer/'
            . '*.twig');

        array_walk($classes, function (&$value) {
            $value = pathinfo($value, PATHINFO_FILENAME);
        });

        if (in_array($class, $classes)) {
            return 'layer';
        }
    }

    public function changeSource(): void
    {

        $data['id'] = filter_input(INPUT_GET, 'id');
        $data['class'] = filter_input(INPUT_GET, 'class');

        $data['item'] = 'source';

        $data['ip'] = 'extension/maps/admin/view/template/module/';
        $data['option'] = $data['ip'] . 'option.twig';

        $this->load->language($this->path);
        $this->response->setOutput($this->load->view(
            'extension/maps/module/source/'
            . $data['class'],
            $data
        ));
    }
}
