<?php

namespace EventBundle\Form;

use EventBundle\Entity\Produit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\OptionsResolver\OptionsResolver;




class ReservationsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->
        add('date', DateType::class, ['widget' => 'single_text'])->
        add('place')->
        add('bike', EntityType::class,
            ['class' => Produit::class,
                'choice_label'=>function(Produit $category){
            return $category->getLibelle();
        }])->
              add('Enter',SubmitType::class,
            array('attr'=>array('class'=>'btn btn-primary btn-sm','style'=>'position:relative;left:45.2%')));

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EventBundle\Entity\Reservations'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'eventbundle_reservations';
    }


}
