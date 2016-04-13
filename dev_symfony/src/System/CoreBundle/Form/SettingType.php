<?php

namespace System\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SettingType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            ->add('application_name', 'text', 
                array(
                    'label' => 'アプリケーション名',
                    'max_length' => 100,
                    'required'  => false
                ));
                
    }
    
    public function getName()
    {
        return 'SettingType';
    }
    
}
