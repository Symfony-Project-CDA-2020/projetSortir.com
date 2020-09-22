<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Security\Core\User\UserInterface;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom de la sortie'
            ])
            ->add('startDate', DateTimeType::class, [
                'label' => 'Date et heure de la sortie'
            ])
            ->add('endDate', DateType::class, [
                'label' => 'Date limite d\'inscription'
            ])
            ->add('duration', IntegerType::class, [
                'label' => 'Durée'
            ])
            ->add('maxRegistrations', IntegerType::class, [
                'label' => 'Nombre de places'
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description et infos'
            ])

        /* todo: ajouter les reste des attributs: Campus, Ville, Lieu, Rue, Code postal, Latitude, Longitude  */
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
