<?php
/**
 * Created by PhpStorm.
 * User: Mariem
 * Date: 15/11/2017
 * Time: 18:55
 */

namespace ReclamationBundle\Controller;
use KarhabtyBundle\Entity\Reclamations;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Request;

class RecController extends Controller
{
    public function ajoutRecAction(Request $request){

        $rec = new Reclamations();
        //$request->isMethod('POST')
        if ( 'POST' == $request->getMethod() ) {
            $rec-> setSujet ($request->get('objet') );
            $rec-> setDescription ($request->get('description') );
            //$datetime = date("Y-m-d H:i:s");
            //define ('DATE_RFC2822', "D, d M Y H:i:s O");
            $rec-> setDateReclamation((new \DateTime('now')));
            $etat="non_traitée";
            $rec-> setEtatRec($etat);
            $rec-> setCapture($request->get('capture') );
            $em = $this->getDoctrine()->getManager();
            $em->persist($rec);
            $em->flush();
        }
        return $this->render('ReclamationBundle:Default:contactus.html.twig', array());
    }

    public function AffichageRecAction(){

        $em = $this->getDoctrine()->getManager();
        $rec = $em->getRepository("KarhabtyBundle:Reclamations")->findAll();

        return $this->render('ReclamationBundle:Default:Reclam.html.twig', array("reclams" => $rec));
    }
    public function AffRecAction($id){

        $em = $this->getDoctrine()->getManager();
        $rec = $em->getRepository("KarhabtyBundle:Reclamations")->find($id);

        return $this->render('ReclamationBundle:Default:Reclam.html.twig', array("recl" => $rec));
    }


    public function SupprimerRecAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository("KarhabtyBundle:Reclamations")->find($id);

        $x="traitée";
        $etat=$modele->getEtatRec();

        if ( $etat == $x ) {
            $em->remove($modele);
            $em->flush();
            return $this->redirectToRoute('reclamation_back');
        }
        else {

            return $this->redirectToRoute('reclamation_back');

        }
    }




}