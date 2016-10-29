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

class ContactController
{
    /**
     * @Route("/contact/")
     */
    public function indexAction()
    {
        $number = mt_rand(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}
