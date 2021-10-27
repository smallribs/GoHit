<?php

namespace Application;

class Test {
    public function Index() {
        $model = new \Core\Library\Model();
        $sql = 'select id,username,password from users where id = 1';
        $model->query($sql);
    }
}