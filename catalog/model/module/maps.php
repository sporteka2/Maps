<?php

namespace Opencart\Catalog\Model\Extension\Maps\Module;

class Maps extends \Opencart\System\Engine\Model {

    public function getModulesByCode(string $code): array {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "module` WHERE `code` = '" . $this->db->escape($code) . "' ORDER BY `name`");

        return $query->rows;
    }
}
