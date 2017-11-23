<?php

namespace TemplateBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use KarhabtyBundle\Entity\Annonces;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('TemplateBundle:Default:index.html.twig');
    }
    public function pageAction()
    {
        return $this->render('TemplateBundle:Default:page.html.twig');
    }
    public function layoutAction()
    {
        return $this->render('TemplateBundle::layout.html.twig');
    }


    public function AboutUsAction()
    {
        return $this->render('TemplateBundle:Default:AboutUS.html.twig');
    }

    public function adminAction()
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        return $this->render('TemplateBundle:Default:indexAdmin.html.twig');
    }

    public function clientAction()
    {
        return $this->render('TemplateBundle:Default:indexclient.html.twig');
    }
    public function amanAction(Request $request)
    {
        if ($request->isMethod('POST')){
            $em = $this->getDoctrine()->getManager();
            $location = $request->get('location');
            $categorie = $request->get('categorie');
            $prix = $request->get('price_range');
            $type= $request->get('type');
            var_dump($prix);

            //$annonce = $em->getRepository('KarhabtyBundle:Annonces')->findAll();

            if($location != null && $categorie != null && $prix != null && $type != null){
                var_dump($location);
                var_dump($categorie);
                var_dump($prix);
                var_dump($type);
                list($number1, $number2) = explode(',', $prix);
                var_dump($number1);
                var_dump($number2);
                $annonce = $em->getRepository('KarhabtyBundle:Annonces')->findAnnoncesByDestianation($location,$categorie,$number1, $number2,$type);
                return $this->render("TemplateBundle:Default:rechercheAnnonce.html.twig",array('annonce'=>$annonce));
            }

        }
       // return $this->render("TemplateBundle:Default:rechercheAnnonce.html.twig",array('annonce'=>$annonce));

    }
}
