<?php

namespace AutoEcoleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AutoEcoleBundle:Default:index.html.twig');
    }
}
