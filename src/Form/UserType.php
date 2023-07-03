<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class,[
                'label' => 'Entrer votre nom :',
                "attr" => [
                    "class" => "nom-input",
                    "placeholder" => "Votre nom" 
                ]
            ])
            ->add('prenom',TextType::class,[
                'label' => 'Entrer votre prenom :',
                "attr" => [
                    "class" => "prenom-input",
                    "placeholder" => "Votre prenom" 
                ]
            ])
            ->add('age', IntegerType::class,[
                "attr" => [
                    "class" => "age-input",
                    "placeholder" => "Votre age" 
                ]
            ])
            ->add('cin', TextType::class,[
                "attr" => [
                    "class" => "cin-input",
                    "placeholder" => "Votre CIN" 
                ]
            ])
            ->add('adresse',TextType::class,[
                "attr" => [
                    "class" => "adresse-input",
                    "placeholder" => "Votre adresse" 
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
