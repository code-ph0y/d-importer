<?php

namespace Mvc\Controller;

use Mvc\Base\BaseController;

class Home extends BaseController
{
    public function indexAction()
    {
        return $this->render('home/index.html', array());
    }
}
