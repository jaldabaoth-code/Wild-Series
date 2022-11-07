<?php

namespace App\Form;

use App\Entity\Actor;
use App\Entity\Season;
use App\Entity\Series;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SeasonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('number')
            ->add('year')
            ->add('description')
            ->add('posterFile', VichFileType::class, [
                'required' => false,
                'allow_delete' => false,
                'download_uri' => false
            ])
             ->add('actors', EntityType::class, [
                'class' => Actor::class,
                'choice_label' => 'name',
                'multiple' => true,
                'by_reference' => false,
                'query_builder' => function(EntityRepository $entityRepository) {
                    return $entityRepository->createQueryBuilder('a')
                        ->orderBy('a.name', 'ASC')
                    ;
                }
            ]) 
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Season::class
        ]);
    }
}
