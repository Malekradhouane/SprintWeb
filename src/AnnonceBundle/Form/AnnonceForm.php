<?php

/**
 * Created by PhpStorm.
 * User: Yousfi Oussama
 * Date: 23/11/2017
 * Time: 12:02
 */
namespace AnnonceBundle\Form;


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
use Vich\UploaderBundle\Form\Type\VichImageType;

class AnnonceForm extends \Symfony\Component\Form\AbstractType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre', TextType::class)->add('categorie', TextType::class)->add('ville', ChoiceType::class, array('choices' =>
            array('Bizerte' => 'Bizerte', "Ben Arous" => 'Ben Arous', 'Tunis' => 'Tunis', 'Ariana' => 'Ariana', 'Beja' => 'Beja', 'Gabes' => 'Gabes', 'Gafsa' => 'Gafsa', 'Jendouba' => 'Jendouba'
            , 'Kairouan' => 'Kairouan', 'Gasserine' => 'Gasserine', 'kebili' => 'kebili', 'ElKef' => 'ElKef', 'Mahdia' => 'Mahdia', 'Manouba' => 'Manouba'
            , 'Medenine' => 'Medenine', 'Montastir' => 'Montastir', 'Nabeul' => 'Nabeul', 'Sfax' => 'Sfax', 'Sidi Bouzid' => 'Sidi Bouzid', 'Siliana' => 'Siliana', 'Sousse' => 'Sousse', 'Tataouine' => 'Tataouine'
            , 'Tozeur' => 'Tozeur', 'Zaghouane' => 'Zaghouane')))->
        add('description', TextareaType::class)->add('prix', TextType::class)->add('imageFile', VichImageType::class)->add('region', TextType::class)
            ->add('adresse', TextareaType::class)->add('kilometrage', NumberType::class)->add('miseCirculation', DateType::class)
            ->add('numtel', TextType::class)->add('save', SubmitType::class);
    }
}