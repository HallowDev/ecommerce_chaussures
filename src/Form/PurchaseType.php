<?php

namespace App\Form;

use App\Entity\Purchase;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PurchaseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('country',TextType::class,[
                'label' => 'Pays',
                'required' => true
            ])
            ->add('city',TextType::class,[
                'label' => 'Ville',
                'required' => true
            ])
            ->add('street',TextType::class,[
                'label' => 'Rue et numéro',
                'required' => true
            ])
            ->add('postalCode',TextType::class,[
                'label' => 'Code postal',
                'required' => true
            ])
            ->add('telephone',TextType::class,[
                'label' => 'Téléphone',
                'required' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Purchase::class,
        ]);
    }
}
