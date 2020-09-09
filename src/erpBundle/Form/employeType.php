<?php

namespace erpBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class employeType extends AbstractType{   
     /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', TextType::class, array( 'label' => false,
                                                    'attr' => array('class' => 'form-control form-control-user',
                                                                    'placeholder' => 'Saisir votre nom'
                                                                     ) 
                                                    
                                                    ) )
        ->add('prenom', TextType::class, array( 'label' => false,
        'attr' => array('class' => 'form-control form-control-user',
                        'placeholder' => 'Saisir votre prénom'
                         ) 
        
        ) )
      ->add('email', EmailType::class, array('label' => false, 
        'attr' => array('class' => 'form-control form-control-user',
        'placeholder' => 'Saisir votre Email')
       ) )
        ->add('statut', TextType::class, array( 'label' => false,
        'attr' => array('class' => 'form-control form-control-user',
                        'placeholder' => 'Saisir votre statut'
                        )
        
        ) )
        ->add('telephone', TextType::class, array('label' => false,
        'attr' => array('class' => 'form-control form-control-user',
                        'placeholder' => 'Saisir votre numéro de téléphone'
                        )

        ) )
        ->add('role', HiddenType::class, array('label' => false,
        'attr' => array('value' => "employe")


        ) )
        ->add('password', PasswordType:: class, array('label' => false,
        'attr' => array('class' => 'form-control form-control-user',
        'placeholder' => 'Saisir votre mot de passe') ) );
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'erpBundle\Entity\employe'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'erpbundle_employe';
    }}
