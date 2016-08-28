<?php

namespace DimporterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DimporterBundle:Default:index.html.twig');
    }
}
