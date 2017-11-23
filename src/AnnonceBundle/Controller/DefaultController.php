<?php

namespace AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AnnonceBundle:Default:index.html.twig');
    }
    public function affichenewAction()
    {
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository("KarhabtyBundle:Annonces")->findAll();
        return $this->render('AnnonceBundle:Default:affichenew.html.twig',array('annonces'=>$modele));
    }
    public function afficheoldAction()
    {
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository("KarhabtyBundle:Annonces")->findAll();
        return $this->render('AnnonceBundle:Default:afficheold.html.twig',array('annonces'=>$modele));
    }
    public function afficheoldCLAction()
    {
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository("KarhabtyBundle:Annonces")->findAll();
        return $this->render('AnnonceBundle:Default:afficheoldCL.html.twig',array('annonces'=>$modele));
    }
    public function affichenewCLAction()
    {
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository("KarhabtyBundle:Annonces")->findAll();
        return $this->render('AnnonceBundle:Default:affichenewCL.html.twig',array('annonces'=>$modele));
    }
    public function afficheClAction()
    {
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository("KarhabtyBundle:Annonces")->findAll();
        return $this->render('AnnonceBundle:Default:affichetoutCL.html.twig',array('modeles'=>$modele));
    }
}
