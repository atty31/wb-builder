<?php
/**
 * Created by PhpStorm.
 * User: Chester
 * Date: 10/29/2016
 * Time: 8:21 PM
 */
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    /**
     * @Route("/contact/", name="contact")
     */
    public function indexAction()
    {
        $number = mt_rand(0, 100);
//        return new Response(
//            '<html><body>Lucky number: '.$number.'</body></html>'
//        );

        return $this->render('contact/content.html.twig', array(
            'number' => $number,
        ));
    }
}
