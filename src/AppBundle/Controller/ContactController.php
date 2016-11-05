<?php
/**
 * Created by PhpStorm.
 * User: Chester
 * Date: 10/29/2016
 * Time: 8:21 PM
 */
namespace AppBundle\Controller;

use AppBundle\Entity\Contact;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactController extends Controller
{
    /**
     * @Route("/contact/", name="contact").
     */
    public function indexAction()
    {
        $contact = new Contact();

        $form = $this->createFormBuilder($contact)
            ->add('name', TextType::class)
            ->add('email', TextType::class)
            ->add('message', TextareaType::class, array(
                'attr' => array('class' => 'tinymce'),
            ))
            ->add('save', SubmitType::class, array('label' => 'Send Message'))
            ->getForm();

        return $this->render('contact/content.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
