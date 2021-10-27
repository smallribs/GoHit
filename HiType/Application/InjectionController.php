<?php

namespace Application;

use Core\Library\Model;
use \HiType\Core\Common;

class Injection {

    public function index() {
        $smarty = Common\Smarty();
        $smarty->display("Injection.tpl");
    }

    public function BlindInjection() {
        $smarty = Common\Smarty();

        if(!empty($_GET['id'])) {
            $id = $_GET['id'];
        }else {
            $id = 1;
        }

        $sql = 'SELECT title, content FROM Article WHERE id = ' . $id;
        $model = new Model();
        $data = $model->query($sql);

        $smarty->assign('data', $data);
        $smarty->display("BlindInjection.tpl");

    }

    public function ErrorInjection() {

        $smarty = Common\Smarty();

        if(!empty($_GET['id'])) {
            $id = $_GET['id'];
        }else {
            $id = 1;
        }

        $sql = 'SELECT title, content FROM Article WHERE id = ' . $id;
        $model = new Model();
        $data = $model->query($sql, 1);

        $smarty->assign('data', $data);
        $smarty->display("ErrorInjection.tpl");
    }
}