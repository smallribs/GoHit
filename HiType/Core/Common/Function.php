<?php

namespace HiType\Core\Common;

function Smarty() {
    require_once(SMARTY_DIR . 'Smarty.class.php');
    $smarty = new \Smarty();

    $smarty->setTemplateDir(VIEW.'templates/');
    $smarty->setCompileDir(VIEW.'templates_c/');
    $smarty->setConfigDir(VIEW.'configs/');
    $smarty->setCacheDir(VIEW.'cache/');

    return $smarty;
}