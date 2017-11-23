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
use KarhabtyBundle\Entity\CoursAutoEcole;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use KarhabtyBundle\Form\CoursAutoEcoleType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class ModelController extends Controller
{
    public function ajoutcoursAction(Request $request)
    {
        $coursautoecole = new CoursAutoEcole();
        /*$form = $this->createFormBuilder($coursautoecole)->add('cours')->add('type',ChoiceType::class , array(
            'choices' => array('Speed limits' => 'Speed limits', 'Road signs' => 'Road signs' ,'Trafic lights' => 'Trafic lights'),
        )  )->add('Path',FileType::class)->
        add('save', SubmitType::class)->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($coursautoecole);
            $em->flush();
            return $this->redirectToRoute('autoecole_ajout');
        }
        return $this->render('AutoEcoleBundle:Default:autoecole.html.twig',array('form'=>$form->createView()));
    }*/
        /*$form = $this->get('form.factory')->createBuilder(FormType::class, $coursautoecole)
            ->add('cours', TextareaType::class)
            ->add('type', TextType::class)
            ->add('type', ChoiceType::class, array(
                'choices' => array('Speed limits' => 'Speed limits', 'Road signs' => 'Road signs', 'Trafic lights' => 'Trafic lights'),
            ))->add('path', FileType::class)
            ->add('save', SubmitType::class)
            ->getForm();*/
        $form=$this->createForm(CoursAutoEcoleType::class ,$coursautoecole);


        $form->handleRequest($request);
        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $coursautoecole->upload();
            $em->persist($coursautoecole);
            $em->flush();
            return $this->redirectToRoute('autoecole_ajout');
            //$request->getSession()->getFlashBag()->add('notice', 'Test bien enregistrée.');
        }
        return $this->render('AutoEcoleBundle:Default:ajoutercours.html.twig',array('form'=>$form->createView()));
    }
public function affichercoursspeedAction(Request $request){
    $coursautoecole = new CoursAutoEcole();

    $em=$this->getDoctrine()->getManager();
        $coursautoecole=$em->getRepository('KarhabtyBundle:CoursAutoEcole')->findByType('Speed limits');
        /*
         * @var $paginator \Knp\Component\Pager\Paginator

         */
        $paginator=$this->get('knp_paginator');
     $result = $paginator->paginate(
        $coursautoecole, /* query NOT result */
        $request->query->getInt('page',1),
         $request->query->getInt('limit', 2)

    );



     return $this->render('AutoEcoleBundle:Default:coursspeed.html.twig',['coursautoecole'=>$result,]);

}
    public function affichercoursroadAction(Request $request){
        $coursautoecole = new CoursAutoEcole();

        $em=$this->getDoctrine()->getManager();
        $coursautoecole=$em->getRepository('KarhabtyBundle:CoursAutoEcole')->findByType('Road signs');

        /*
        * @var $paginator \Knp\Component\Pager\Paginator

        */
        $paginator=$this->get('knp_paginator');
        $result = $paginator->paginate(
            $coursautoecole, /* query NOT result */
            $request->query->getInt('page',1),
            $request->query->getInt('limit', 2)  );
        return $this->render('AutoEcoleBundle:Default:coursroad.html.twig',['coursautoecole'=>$result,]);

    }
    public function affichercourstraficAction(Request $request){
        $coursautoecole = new CoursAutoEcole();

        $em=$this->getDoctrine()->getManager();
        $coursautoecole=$em->getRepository('KarhabtyBundle:CoursAutoEcole')->findByType('Trafic lights');
        /*
        * @var $paginator \Knp\Component\Pager\Paginator

      */
        $paginator=$this->get('knp_paginator');
        $result = $paginator->paginate(
            $coursautoecole, /* query NOT result */
            $request->query->getInt('page',1),
            $request->query->getInt('limit', 2)  );

        return $this->render('AutoEcoleBundle:Default:courstrafic.html.twig',['coursautoecole'=>$result,]);

    }
    public function affichercoursallAction(Request $request){
        $coursautoecole = new CoursAutoEcole();

        $em=$this->getDoctrine()->getManager();
        $coursautoecole=$em->getRepository('KarhabtyBundle:CoursAutoEcole')->findAll();
        /*
         * @var $paginator \Knp\Component\Pager\Paginator

        */
        $paginator=$this->get('knp_paginator');
        $result = $paginator->paginate(
            $coursautoecole, /* query NOT result */
            $request->query->getInt('page',1),
            $request->query->getInt('limit', 2)  );

        return $this->render('AutoEcoleBundle:Default:affichercoursadmin.html.twig',['coursautoecole'=>$result,]);

    }

    public function deletecoursAction($id)
    {
        $coursautoecole = new CoursAutoEcole();
        $em=$this->getDoctrine()->getManager();
        $coursautoecole=$em->getRepository("KarhabtyBundle:CoursAutoEcole")->find($id);
        $em->remove($coursautoecole);
        $em->flush();
        return $this->redirectToRoute('autoecole_affichercoursall');
    }
    public function updatecoursAction(Request $request,$id)
    {
        $coursautoecole = new CoursAutoEcole();
        $em=$this->getDoctrine()->getManager();
        $coursautoecole=$em->getRepository("KarhabtyBundle:CoursAutoEcole")->find($id);
        $form = $this->createForm(CoursAutoEcoleType::class,$coursautoecole);
        $form->handleRequest($request);
        if($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($coursautoecole);
            $em->flush();
            return $this->redirectToRoute('autoecole_affichercoursall');
        }
        return $this->render('AutoEcoleBundle:Default:updatecours.html.twig',array('form'=>$form->createView()));

    }
    public function pdfAction(){
        $coursautoecole = new CoursAutoEcole();

        $em=$this->getDoctrine()->getManager();
        $coursautoecole=$em->getRepository('KarhabtyBundle:CoursAutoEcole')->findAll();
        $snappy = $this->get('knp_snappy.pdf');
        $snappy->setOption('no-outline', true);
        $snappy->setOption('page-size','LETTER');

        $snappy->setOption('encoding', 'UTF-8');
        $html = $this->renderView('AutoEcoleBundle:Default:courspdf.html.twig', array("coursautoecole" => $coursautoecole));

        $filename = 'Road Code';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.Road Code"'
            )
        );






    }
}


