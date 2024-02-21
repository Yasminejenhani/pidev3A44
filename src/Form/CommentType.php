<?php

namespace App\Form;

use App\Entity\Comment;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('description', TextareaType::class, [
            'label' => 'description',
            'attr' => ['placeholder' => 'Description'],
        ])
        ->add('rate',ChoiceType::class, [
            'choices' => [
                '★' => 1,
                '★★' => 2,
                '★★★' => 3,
                '★★★★' => 4,
                '★★★★★' => 5,
            ],
            'expanded' => true,
            'multiple' => false,
            'label' => 'rate',
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
