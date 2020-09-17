<?php

namespace App\Form;

use App\Entity\Sorties;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class SortiesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom de la sortie'
            ])
            ->add('datedebut', DateTimeType::class, [
                'label' => 'Date et heure de la sortie'
            ])
            ->add('datecloture', DateType::class, [
                'label' => 'Date limite d\'inscription'
            ])
            ->add('duree', IntegerType::class, [
                'label' => 'Durée'
            ])
            ->add('nbinscriptionsmax', IntegerType::class, [
                'label' => 'Nombre de places'
            ])
            ->add('descriptioninfos', TextareaType::class, [
                'label' => 'Description et infos'
            ])
        /* todo: ajouter les reste des attributs: Campus, Ville, Lieu, Rue, Code postal, Latitude, Longitude  */
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Sorties::class,
        ]);
    }
}
