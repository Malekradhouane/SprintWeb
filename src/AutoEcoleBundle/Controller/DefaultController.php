<?php

namespace AutoEcoleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AutoEcoleBundle:Default:index.html.twig');
    }
    public function layoutAction()
    {
        return $this->render('AutoEcoleBundle:Default:layout.html.twig');
    }
    public function autoecoleAction()
    {
        return $this->render('AutoEcoleBundle:Default:autoecole.html.twig');
    }
    /*public function noteAction()
    {
        return $this->render('AutoEcoleBundle:Default:Note.html.twig');
    }*/
    public function noteAction()
    {
        $snappy = $this->get('knp_snappy.pdf');

        $html = $this->renderView('AutoEcoleBundle:Default:Note.html.twig', array(
            //..Send some data to your view if you need to //
        ));

        $filename = 'myFirstSnappyPDF';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }
}
