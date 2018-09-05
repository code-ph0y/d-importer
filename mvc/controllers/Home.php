<?php

namespace Mvc\Controllers;

use Mvc\Base\BaseController;

class Home extends BaseController
{
    public function indexAction() {

        return $this->render('index.html', array());
    }
}
