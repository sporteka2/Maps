<?php

namespace Opencart\Catalog\Controller\Extension\Maps\Module;

class Maps extends \Opencart\System\Engine\Controller {

    private $path = 'extension/maps/module/maps';

    public function index(array $setting): string {

        $this->sm($setting['config_marker']);
                
        return $this->load->view($this->path, $setting);
    }

    public function tag(&$route, &$data) {
        $this->load->model($this->path);
        $modules = $this->model_extension_maps_module_maps->getModulesByCode("maps.maps");

        $d = $this->load->language($this->path);
        $t = 0;
        foreach ($modules as $module) {
            $setting = json_decode($module['setting'], true);

            if ($setting && $setting['status']) {
                
                $this->sm($setting['config_marker']);
                
                $d = array_merge($d, $setting);

                $t++;
                $d['module_id'] = $setting['module_id'] . 't' . (string) $t;

                $data[$setting['tag']] = $this->view($this->path, $d);
            }
        }
    }

    
    function sm(&$m) {
        if ($m == "") {
            $m = 'extension/maps/catalog/view/javascript/marker.svg';
        } else {
            $m = 'image/' . $m;
        }
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
