<?php

namespace MyApp\HotelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class ReservationHotelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idChambre')
            ->add('idClient')
            ->add('date')
            ->add('dateDebut')
            ->add('dateFin')
            ->add('Valider' ,SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getName()
    {
        return 'my_app_hotel_bundle_reservation_hotel_type';
    }
}
