<?php

namespace Appartoo\CarnetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;

class ProfileType extends BaseType
{
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $child = $builder->create('user', 'form', array('data_class' => $this->class));
        $this->buildUserForm($child, $options);

        $builder
            ->add($child)
            ->add('Adresse','adresse')
            ->add('Tel','tel')
            ->add('SiteWeb','siteweb')
        ;

    }
	
    public function getDefaultOptions(array $options)
    {
        return array('data_class' => 'FOS\UserBundle\Form\Model\CheckPassword');
    }
    

    // For Symfony 2.x
    public function getName()
    {
        return 'user_edit_profile';
    }
	
	

	
	
}