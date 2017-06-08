<?php

namespace CrazyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

class BenevolesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('attr' => array('placeholder' => 'Votre nom'), 
                'required' => false,
                'constraints' => array(
                    new NotBlank(array("message" => "Merci de renseigner votre nom")),
                )
            ))
            ->add('firstname', TextType::class, array('attr' => array('placeholder' => 'Votre prénom'), 
                'required' => false,
                'constraints' => array(
                    new NotBlank(array("message" => "Merci de renseigner votre prénom")),
                )
            ))
            ->add('telephone', TextType::class, array('attr' => array('placeholder' => 'Votre téléphone'), 
                'required' => false,
                'constraints' => array(
                    new NotBlank(array("message" => "Merci de renseigner votre numéro de téléphone")),
                )
            ))
            ->add('email', EmailType::class, array('attr' => array('placeholder' => 'Votre adresse e-mail'),
                'required' => false,
                'constraints' => array(
                    new NotBlank(array("message" => "Merci de renseigner votre e-mail")),
                    new Email(array("message" => "Votre e-mail semble ne pas être valide")),
                )
            ))
            ->add('age', TextType::class, array('attr' => array('placeholder' => 'Votre âge'), 
                'required' => false,
                'constraints' => array(
                    new NotBlank(array("message" => "Merci de renseigner votre âge")),
                )
            ))
            ->add('disponibilite', TextareaType::class, array('attr' => array('placeholder' => 'Indiquez vos disponibilités'),
                'required' => false,
                'constraints' => array(
                    new NotBlank(array("message" => "Merci de préciser vos disponibilités")),
                )
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'error_bubbling' => true
        ));
    }

    public function getName()
    {
        return 'benevoles_form';
    }
}