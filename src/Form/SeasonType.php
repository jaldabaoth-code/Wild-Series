<?php

namespace App\Form;

use App\Entity\Season;
use App\Entity\Serie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SeasonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
     /*   $builder
            ->add('number')
            ->add('year')
            ->add('description')
            ->add('serie', null, ['choice_label' => 'title'])
        ;*/

      /*  $builder->add('actors', EntityType::class, [
            'class' => Actor::class,
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
            'by_reference' => false,
        ]);*/
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Season::class,
        ]);
    }
}
