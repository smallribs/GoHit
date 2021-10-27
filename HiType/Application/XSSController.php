<?php

namespace Application;

use \HiType\Core\Common;

class XSS {
    public function index() {
        $smarty = Common\Smarty();
        $smarty->display("XSS.tpl");
    }
}