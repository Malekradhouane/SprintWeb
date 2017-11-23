<?php

namespace KarhabtyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KarhabtyBundle:Default:index.html.twig');
    }
}
