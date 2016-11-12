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
            ->setAction($this->generateUrl('test'))
            ->getForm();

        return $this->render('contact/content.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    /**
     * @Route("/contact/test/", name="test").
     */
    public function testAction(){
        echo 1; exit();
    }
}
