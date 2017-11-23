<?php
/**
 * Created by PhpStorm.
 * User: MALEK
 * Date: 20/11/2017
 * Time: 00:36
 */

namespace KarhabtyBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class TestAutoEcoleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder


        ->add('questions',      TextType::class)
        ->add('reponses',     TextType::class)
        ->add('fausse1')
        ->add('fausse2')
        ->add('fausse3')
        ->add('file')
        ->add('save',      SubmitType::class);
    }
}