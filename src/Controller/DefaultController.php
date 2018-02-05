<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
    * @Route("/lucky/number")
    */
    public function index()
    {
        return $this->render('test.html.twig');
        var_dump(123);exit();
    }
}
