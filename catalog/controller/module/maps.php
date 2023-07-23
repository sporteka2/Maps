<?php

namespace Opencart\Catalog\Controller\Extension\Maps\Module;

class Maps extends \Opencart\System\Engine\Controller {

    private $path = 'extension/maps/module/maps';

    public function index(array $setting): string {
        $this->load->language($this->path);
        $data['zoomInTipLabel'] = $this->language->get('zoomInTipLabel');
        $data['zoomOutTipLabel'] = $this->language->get('zoomOutTipLabel');

        $data['module_id'] = $setting['module_id'];
        $data['geocode'] = $setting['geocode'];
        $data['zoom'] = $setting['zoom'];
        $data['width'] = $setting['width'];
        $data['height'] = $setting['height'];

        return $this->load->view($this->path, $data);
    }

    public function openlayers(&$route, &$data) {
        $modules = $this->getModulesByCode("maps.maps");

        $t = 0;
        foreach ($modules as $module) {
            $setting = json_decode($module['setting'], true);

            if ($setting && $setting['status']) {
                $t++;
                $d['module_id'] = $setting['module_id'] . 't' . (string) $t;
                $d['geocode'] = $setting['geocode'];
                $d['zoom'] = $setting['zoom'];
                $d['width'] = $setting['width'];
                $d['height'] = $setting['height'];

                $data[$setting['tag']] = $this->view($this->path, $d);
            }
        }
    }

    function getModulesByCode(string $code): array {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "module` WHERE `code` = '" . $this->db->escape($code) . "' ORDER BY `name`");

        return $query->rows;
    }

    function view(string $route, array $data = [], string $code = ''): string {
        // Sanitize the call
        $route = preg_replace('/[^a-zA-Z0-9_\/]/', '', $route);

        $output = '';

        if (!$output) {
            // Make sure it's only the last event that returns an output if required.
            $output = $this->template->render($route, $data, $code);
        }

        return $output;
    }
}
