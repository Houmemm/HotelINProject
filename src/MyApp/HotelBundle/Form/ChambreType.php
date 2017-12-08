<?php

namespace MyApp\HotelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use MyApp\HotelBundle\Repository\ChambreRepository;

class ChambreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idHotel')
            ->add('nbrePlace')
            ->add('prix')
            ->add('disponible')
            ->add('Valider' ,SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getName()
    {
        return 'my_app_hotel_bundle_chambre_type';
    }
}
