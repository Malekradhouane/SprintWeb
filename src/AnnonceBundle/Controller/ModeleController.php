<?php
/**
 * Created by PhpStorm.
 * User: Yousfi Oussama
 * Date: 16/11/2017
 * Time: 17:03
 */

namespace AnnonceBundle\Controller;

//use Doctrine\DBAL\Types\FloatType;
//use Doctrine\DBAL\Types\TextType;
//use Doctrine\DBAL\Types\DateType;
use KarhabtyBundle\Entity\Annonces;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Route;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\HttpFoundation\JsonResponse;
use AnnonceBundle\Form\AnnonceForm;
class ModeleController extends Controller
{
    public function ajoutannonceAction(Request $request)
    {
        $annonce = new Annonces($this->getUser(),"old_car",0);
        /*$form = $this->createFormBuilder($annonce)->add('titre')->add('categorie')->add('ville')->
        add('description')->add('prix')->add('image')->add('region')
            ->add('type')->add('adresse')->add('kilometrage')->add('miseCirculation')
            ->add('numtel')->add('save', SubmitType::class)->getForm();*/

        $form = $this->get('form.factory')->createBuilder(FormType::class, $annonce)->add('titre', TextType::class)->add('categorie', TextType::class)->add('ville', ChoiceType::class , array('choices'=>
            array('Bizerte'=>'Bizerte',"Ben Arous"=>'Ben Arous','Tunis'=>'Tunis','Ariana'=>'Ariana','Beja'=>'Beja','Gabes'=>'Gabes','Gafsa'=>'Gafsa','Jendouba'=>'Jendouba'
            ,'Kairouan'=>'Kairouan','Gasserine'=>'Gasserine','kebili'=>'kebili','ElKef'=>'ElKef','Mahdia'=>'Mahdia','Manouba'=>'Manouba'
            ,'Medenine'=>'Medenine','Montastir'=>'Montastir','Nabeul'=>'Nabeul','Sfax'=>'Sfax','Sidi Bouzid'=>'Sidi Bouzid','Siliana'=>'Siliana','Sousse'=>'Sousse','Tataouine'=>'Tataouine'
            ,'Tozeur'=>'Tozeur','Zaghouane'=>'Zaghouane')))->
        add('description', TextareaType::class)->add('prix',TextType::class)->add('imageFile', VichImageType::class)->add('region', TextType::class)
            ->add('adresse', TextareaType::class)->add('kilometrage', NumberType::class)->add('miseCirculation', DateType::class)
            ->add('numtel', TextType::class)->add('save', SubmitType::class)->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();
            return $this->redirectToRoute('karhabty_homepage');
        }
        return $this->render('AnnonceBundle:Modele:ajoutAnnonce.html.twig', array('form' => $form->createView()));
        //return $this->render('AnnonceBundle:Modele:ajoutAnnonce.html.twig');
    }


    public function interfaceAnnonceAction()
    {
        return $this->render('AnnonceBundle:Modele:gererAnnonce.html.twig');
    }


    public function interfaceAnnonceneuveAction()
    {
        return $this->render('AnnonceBundle:Modele:ajoutAnnonceNeuve.html.twig');
    }
    public function annAdminAction()
    {
        $em=$this->getDoctrine()->getManager();
        $annonce=$em->getRepository("KarhabtyBundle:Annonces")->findAll();
        return $this->render('AnnonceBundle:Modele:AnnonceAdmin.html.twig',array('annonces'=>$annonce));
    }


    public function ajoutannonceneuveAction(Request $request)
    {
        $annonce = new Annonces($this->getUser(),"new_car",0);
        /*$form = $this->createFormBuilder($annonce)->add('titre')->add('categorie')->add('ville')->
        add('description')->add('prix')->add('image')->add('region')
            ->add('type')->add('garantie')->add('nbre_places')->add('nbre_portes')->add('energie')
            ->add('nbre_cylindres')->add('puissance')->add('consomation_mixte')->add('nbre_places')
            ->add('vitesse_max')->add('performance')->add('connectivite')
            ->add('save', SubmitType::class)->getForm();*/
        $form = $this->get('form.factory')->createBuilder(FormType::class, $annonce)->add('titre', TextType::class)->add('categorie', TextType::class)->add('ville', ChoiceType::class , array('choices'=>
            array('Bizerte'=>'Bizerte',"Ben Arous"=>'Ben Arous','Tunis'=>'Tunis','Ariana'=>'Ariana','Beja'=>'Beja','Gabes'=>'Gabes','Gafsa'=>'Gafsa','Jendouba'=>'Jendouba'
            ,'Kairouan'=>'Kairouan','Gasserine'=>'Gasserine','kebili'=>'kebili','ElKef'=>'ElKef','Mahdia'=>'Mahdia','Manouba'=>'Manouba'
            ,'Medenine'=>'Medenine','Montastir'=>'Montastir','Nabeul'=>'Nabeul','Sfax'=>'Sfax','Sidi Bouzid'=>'Sidi Bouzid','Siliana'=>'Siliana','Sousse'=>'Sousse','Tataouine'=>'Tataouine'
            ,'Tozeur'=>'Tozeur','Zaghouane'=>'Zaghouane')))->
        add('description', TextareaType::class)->add('prix',TextType::class)->add('imageFile', VichImageType::class)->add('region', TextType::class)
            ->add('garantie', NumberType::class)->add('nbre_places', NumberType::class)->add('nbre_portes', NumberType::class)->add('energie', ChoiceType::class , array('choices'=>
                array('Diesel'=>'Diesel',"Essence"=>'Essence','Gaz'=>'Gaz')))
            ->add('nbre_cylindres', NumberType::class)->add('puissance', NumberType::class)->add('consomation_mixte', NumberType::class)->add('nbre_places', NumberType::class)
            ->add('vitesse_max', NumberType::class)->add('performance', NumberType::class)->add('save', SubmitType::class)->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();
            return $this->redirectToRoute('karhabty_homepage');
        }
        return $this->render('AnnonceBundle:Modele:ajoutAnnonceNeuve.html.twig', array('form' => $form->createView()));
        //return $this->render('AnnonceBundle:Modele:ajoutAnnonce.html.twig');
    }
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
   /* public function ajoutannonceAction(Request $request)
          {
              $annonce = new Annonces();
              if ($request->isMethod('GET')) {
                  $annonce->setIdAnnonce(12);
                  $annonce->setTitre($_GET['titre']);
                  $annonce->setCategorie($_GET['categorie']);
                  $annonce->setVille($_GET['ville']);
                  $annonce->setDescription($_GET['description']);
                  $annonce->setPrix($_GET['price']);
                  $annonce->setImage($_GET['image']);
                  $annonce->setRegion($_GET['location']);
                  $annonce->setType($_GET['type']);
                  $annonce->setGarantie($_GET['garantie']);
                  $annonce->setNbrePlaces($_GET['nbrplace']);
                  $annonce->setNbrePortes($_GET['nbrporte']);
                  $annonce->setEnergie($_GET['energie']);
                  $annonce->setNbreCylindres($_GET['nbrcylindre']);
                  $annonce->setPuissance($_GET['power']);
                  $annonce->setConsomationMixte($_GET['consommation']);
                  $annonce->setVitesseMax($_GET['vitesse']);
                  $annonce->setPerformance($_GET['performance']);
                  $annonce->setConnectivite($_GET['connect']);
                  $annonce->setAdresse($_GET['adress']);
                  $annonce->setKilometrage($_GET['kilometrage']);
                  $annonce->setMiseCirculation($_GET['rdate']);
                  $annonce->setNumTel($_GET['phone']);
                  $em = $this->getDoctrine()->getManager();
                  var_dump($annonce);
                  $em->persist($annonce);
                  $em->flush();
                  return $this->render('AnnonceBundle:Modele:ajoutAnnonce.html.twig');
              }
              return $this->render('AnnonceBundle:Modele:ajoutAnnonce.html.twig');
          }*/

    /*public function ajoutannonceAction(Request $request)
    {
        $annonce= new Annonces();
        $form=$this->createForm(Annonces::class, $annonce)->add();
        $form->handleRequest($request);
        if($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();
            return $this->redirectToRoute('karhabty_homepage');
        }
        return $this->render('AnnonceBundle:Modele:ajoutAnnonce.html.twig',array('form'=>$form->createView()));
    }*/

    public function listAction()
    {
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository("KarhabtyBundle:Annonces")->findAll();
        return $this->render('AnnonceBundle:Modele:affichetout.html.twig',array('modeles'=>$modele));
    }
    public function rechercheAction()
    {
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository("KarhabtyBundle:Annonces")->findBy('categorie');
        return $this->render('AnnonceBundle:Modele:affichetout.html.twig',array('modeless'=>$modele));
    }
    public function consulterAction()
    {
        $em=$this->getDoctrine()->getManager();
        $annonce = $em->getRepository("KarhabtyBundle:Annonces")->findAnnonceByIdUser($this->getUser()->getId());

        return $this->render('AnnonceBundle:Modele:consulterAnnonce.html.twig',array('annonces'=>$annonce));
    }
    public function queryAction()
    {
        $em= $this->getDoctrine()->getManager();
        $annonce = $em->getRepository('KarhabtyBundle:Annonces')->findQb();
        return new JsonResponse(count($annonce));
    }
    public function AcceptAction($id)
    {
        $em= $this->getDoctrine()->getManager();
        $annonce = $em->getRepository('KarhabtyBundle:Annonces')->find($id);
        $annonce->setConnectivite(1);
        $em->persist($annonce);
        $em->flush();
        return $this-> redirectToRoute('annonce_admin');

    }
    public function refuseAction($id)
    {
        $em= $this->getDoctrine()->getManager();
        $annonce = $em->getRepository('KarhabtyBundle:Annonces')->find($id);
        $em->remove($annonce);
        $em->flush();
        return $this-> redirectToRoute('annonce_admin');

    }
    public function deleteAction($id)
    {
        $em= $this->getDoctrine()->getManager();
        $annonce = $em->getRepository('KarhabtyBundle:Annonces')->find($id);
        $em->remove($annonce);
        //$em->persist($annonce);
        $em->flush();
        return $this->redirectToRoute('consulter_annonce');
    }
    public function modifieAnnrAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $annonce = $em->getRepository('KarhabtyBundle:Annonces')->find($id);
        $form = $this->createForm(AnnonceForm::class);
        $form->handleRequest($request);
        if ($form->isValid())
        {
            $em= $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();
            return $this->redirectToRoute('consulter_annonce');
        }
        return $this->render('AnnonceBundle:Modele:modifier.html.twig',array('form'=>$form->createView()));
    }
    public function modifierAction(Request $request, $id)
    {
        $annonce = new Annonces($this->getUser(),"old_car",0);
        $em=$this->getDoctrine()->getManager();
        $annonce = $em->getRepository('KarhabtyBundle:Annonces')->find($id);
        $form = $this->createForm(AnnonceForm::class,$annonce);
        $annonce->setConnectivite(0);
        $form->handleRequest($request);
        if ($form->isValid())
        {
            $em= $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();
            return $this->redirectToRoute('consulter_annonce');
        }
        return $this->render('AnnonceBundle:Modele:modifier.html.twig',array('form'=>$form->createView()));
    }
}