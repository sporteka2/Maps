<?php

namespace Opencart\Catalog\Controller\Extension\Ol\Module;

class Ol extends \Opencart\System\Engine\Controller {

    public function index(array $setting): string {
        $this->load->language('extension/ol/module/ol');

        $data['module_id'] = $setting['module_id'];
        $data['geocode'] = $setting['geocode'];
        $data['zoom'] = $setting['zoom'];
        $data['width'] = $setting['width'];
        $data['height'] = $setting['height'];

        return $this->load->view('extension/ol/module/ol', $data);
    }

    public function openlayers(&$route, &$data) {
        $modules = $this->getModulesByCode("ol.ol");
        
        $t = 0;
        
        foreach ($modules as $module) {
            $setting = json_decode($module['setting'], true);

            if ($setting && $setting['status']) {
                $t++;
                $d['module_id'] = $setting['module_id'].'t'.(string)$t;
                $d['geocode'] = $setting['geocode'];
                $d['zoom'] = $setting['zoom'];
                $d['width'] = $setting['width'];
                $d['height'] = $setting['height'];

                $data[$setting['tag']] = $this->view('extension/ol/module/ol', $d);
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
