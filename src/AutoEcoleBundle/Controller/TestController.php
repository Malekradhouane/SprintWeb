<?php
/**
 * Created by PhpStorm.
 * User: MALEK
 * Date: 16/11/2017
 * Time: 23:02
 */

namespace AutoEcoleBundle\Controller;

//use Symfony\Component\BrowserKit\Request;
//use Symfony\Component\HttpKernel\Tests\Controller;
use KarhabtyBundle\Entity\TestAutoEcole;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use KarhabtyBundle\Form\TestAutoEcoleType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class TestController extends Controller
{
    public function ajouttestAction(Request $request)
    {
        $testautoecole = new TestAutoEcole();
       // $form = $this->createFormBuilder($testautoecole)->

       /* $form = $this->get('form.factory')->createBuilder(FormType::class, $testautoecole)
            ->add('questions',      TextType::class)
            ->add('reponses',     TextType::class)
            ->add('fausse1',   TextType::class)
            ->add('fausse2',    TextType::class)
            ->add('fausse3', TextType::class)
            ->add('Path',FileType::class)
            ->add('save',      SubmitType::class)
            ->getForm()
        ;*/


        $form=$this->createForm(TestAutoEcoleType::class ,$testautoecole);


        $form->handleRequest($request);
        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $testautoecole->upload();
            $em->persist($testautoecole);
            $em->flush();
            return $this->redirectToRoute('autoecole_ajouttest');
            //$request->getSession()->getFlashBag()->add('notice', 'Test bien enregistrée.');
        }
        return $this->render('AutoEcoleBundle:Default:index.html.twig',array('form'=>$form->createView()));
    }
    public function affichertestAction(Request $request){
        $testautoecole = new TestAutoEcole();

        $em=$this->getDoctrine()->getManager();
        $testautoecole=$em->getRepository('KarhabtyBundle:TestAutoEcole')->findAll();
        /*
       * @var $paginator \Knp\Component\Pager\Paginator

      */
        $paginator=$this->get('knp_paginator');
        $result = $paginator->paginate(
            $testautoecole, /* query NOT result */
            $request->query->getInt('page'),
            $request->query->getInt('limit', 1)  );
        return $this->render('AutoEcoleBundle:Default:test.html.twig',['testautoecole'=>$result,]);

    }
    public function affichertestallAction(Request $request){
        $testautoecole = new TestAutoEcole();

        $em=$this->getDoctrine()->getManager();
        $testautoecole=$em->getRepository('KarhabtyBundle:TestAutoEcole')->findAll();
        /*
       * @var $paginator \Knp\Component\Pager\Paginator

      */
        $paginator=$this->get('knp_paginator');
        $result = $paginator->paginate(
            $testautoecole, /* query NOT result */
            $request->query->getInt('page',1),
            $request->query->getInt('limit', 3)  );
        return $this->render('AutoEcoleBundle:Default:affichertestadmin.html.twig',['testautoecole'=>$result,]);

    }

    public function deletetestAction($id)
    {
        $testautoecole = new TestAutoEcole();
        $em=$this->getDoctrine()->getManager();
        $testautoecole=$em->getRepository("KarhabtyBundle:TestAutoEcole")->find($id);
        $em->remove($testautoecole);
        $em->flush();
        return $this->redirectToRoute('autoecole_affichertestsall');
    }
    public function updatetestAction(Request $request,$id)
    {
        $testautoecole = new TestAutoEcole();
        $em=$this->getDoctrine()->getManager();
        $testautoecole=$em->getRepository("KarhabtyBundle:TestAutoEcole")->find($id);
        $form = $this->createForm(TestAutoEcoleType::class,$testautoecole);
        $form->handleRequest($request);
        if($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($testautoecole);
            $em->flush();
            return $this->redirectToRoute('update_test');
        }
        return $this->render('AutoEcoleBundle:Default:updatetest.html.twig',array('form'=>$form->createView()));

    }
}
