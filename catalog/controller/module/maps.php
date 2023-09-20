<?php

namespace Opencart\Catalog\Controller\Extension\Maps\Module;

class Maps extends \Opencart\System\Engine\Controller {

    private $path = 'extension/maps/module/maps';

    public function index(array $setting): string {

        // <editor-fold desc="load_language" defaultstate="collapsed">

        $a = array_filter(
                $this->load->language($this->path, 'm'),
                function ($k) {
                    return str_starts_with($k, 'm_');
                }, ARRAY_FILTER_USE_KEY);

        $b = [];

        foreach ($a as $key => $value) {
            $key = substr($key, strlen('m_'));
            $b[$key] = $value;
        }

        $this->load->language($this->path);

        if (isset($setting['m']['control'])) {
            foreach ($setting['m']['control'] as &$m_item) {

                foreach ($b as $key => $value) {

                    $k = explode(".", $key);

                    if ($m_item['class'] == ucfirst($k[1])) {
                        $m_item['options'][$k[2]] = $this->language->get($key);
                    }
                }
            }
        }

        // </editor-fold>

        $setting['m']['view']['options']['center'] = [
            $setting['m']['view']['options']['center']['longitude'],
            $setting['m']['view']['options']['center']['latitude']
        ];

        // <editor-fold desc="bpn" defaultstate="collapsed">

        foreach ($setting['m']['marker'] as &$mp) {
            if (trim($mp['point']['longitude']) == '' ||
                    trim($mp['point']['latitude']) == '') {
                unset($mp['point']);
            } else {
                $mp['point'] = [
                    $mp['point']['longitude'],
                    $mp['point']['latitude']];
            }
        }
        $bpn = [];
        foreach ($setting['m']['marker'] as $key => $mp2) {
            if (!isset($mp2['point'])) {
                $bpn[$key] = $key;
            }
        }
        foreach ($bpn as $b) {
            unset($setting['m']['marker'][$b]);
        }

        // </editor-fold>

        $setting['m'] = $this->array_filter_recursive($setting['m']);

        $setting['m']['id'] = "map" . $setting['module_id'];

        $setting['m'] = str_replace('\\\\', '\\',
                json_encode($setting['m'], JSON_NUMERIC_CHECK));

        return $this->load->view($this->path, $setting);
    }

    function array_filter_recursive($a) {
        foreach ($a as $key => &$value) {
            if (is_array($value)) {
                $value = $this->array_filter_recursive($value);
                if (empty($value)) {
                    unset($a[$key]);
                }
            } elseif (trim($value) == '') {
                unset($a[$key]);
            }
        }
        return $a;
    }
}
