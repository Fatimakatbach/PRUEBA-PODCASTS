<?php

namespace App\Form;

use App\Entity\Buscador;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class BuscadorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Busqueda', TextType::class, [
                'label' => null,
                'constraints' => [
                    new NotBlank()

                ],
                'attr' => [
                    'placeholder' => 'Buscar',
                    'class' => 'form-control mr-sm-2'
                ]


            ])
            ->add('Buscar', SubmitType::class, [
                'label' => 'Buscar',
                'attr' => [
                    'class' => 'btn-outline-primary my-2 my-sm-0']
            ])

        ;
    }

 
}
