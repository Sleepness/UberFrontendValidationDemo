<?php

namespace Acme\DemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Post FormType
 *
 * @author Viktor Novikov <viktor.novikov95@gmail.com>
 * @author Alexandr Zhulev <alexandrzhulev@gmail.com>
 */
class PostType extends AbstractType
{
    /**
     * {@inheritDoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text')
            ->add('content', 'textarea', array(
                'attr'  => array(
                    'rows' => 4,
                    'cols' => 45,)
                ))
            ->add('date', 'text')
            ->add('authorName', 'text')
            ->add('authorEmail', 'email')
            ->add('authorHomePage', 'url');
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'Acme\DemoBundle\Model\Post',
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'post';
    }
}
