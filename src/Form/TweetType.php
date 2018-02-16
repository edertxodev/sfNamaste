<?php

namespace App\Form;

use App\Entity\Tweet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TweetType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', TextareaType::class, ['label' => 'labels.content'])
            ->add('submit', SubmitType::class, [
                'label' => 'labels.submit',
                'attr' => [
                    'class' => 'btn btn-default btn-lg btn-block',
                ],
            ]);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Tweet::class,
            'translation_domain' => 'tweet',
        ]);
    }
}