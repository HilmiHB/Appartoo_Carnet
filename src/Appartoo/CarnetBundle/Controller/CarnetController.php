<?php

namespace Appartoo\CarnetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Appartoo\CarnetBundle\Entity\Contact;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CarnetController extends Controller
{
    public function indexAction()
    {
       
		return $this->redirect("connexion");
    }
	
	public function contactAction()
	{
		$em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppartooCarnetBundle:Contact'); 
		$user = $this->container->get('security.context')->getToken()->getUser();
        $un=$user->getUsername();
		$contacts = $repository->findByProp($un);
		
		
		return $this->render('AppartooCarnetBundle:Default:index.html.twig', array(
		'contacts' => $contacts,
		'user' => $user->getUsername()
		));
	
	}
	
	public function contactAjoutAction()
	{
		$contact= new Contact();
		$formBuilder = $this->get('form.factory')->createBuilder('form', $contact);
		
		$formBuilder
           ->add('contact', 'text')		
           ->add('Ajouter','submit')
		  ;
		  $form = $formBuilder->getForm();
		
		return $this->render('AppartooCarnetBundle:Default:ajout.html.twig', array(
      'form' => $form->createView(),
	  ));
	}
	
	
	
}
