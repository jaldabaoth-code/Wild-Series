<?php

namespace App\Form;

use App\Entity\Actor;
use App\Entity\Series;
use App\Entity\Season;
use App\Form\CommentType;
use Symfony\Component\Form\AbstractType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class SeriesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class)
            ->add('description', TextareaType::class)
            ->add('posterFile', VichFileType::class, [
                'required'      => false,
                'allow_delete'  => false,
                'download_uri' => false
                ])
            ->add('imageFile', VichFileType::class, [
                'required'      => false,
                'allow_delete'  => false,
                'download_uri' => false
                ])
            ->add('country', TextType::class)
            ->add('year', IntegerType::class)
            ->add('category', null, [
                'choice_label' => 'name'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Series::class,
        ]);
    }
}
