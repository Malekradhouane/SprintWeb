<?php
namespace KarhabtyBundle\Form ;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class CoursAutoEcoleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('cours')
            ->add('type', ChoiceType::class, array(
                'choices' => array('Speed limits' => 'Speed limits', 'Road signs' => 'Road signs', 'Trafic lights' => 'Trafic lights'),
            ))
            ->add('file')
            ->add('save', SubmitType::class)
        ;
    }

    // …
}