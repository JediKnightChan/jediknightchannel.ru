<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class MediaController extends Controller
{
    /**
     * @Route("/media/")
     * @Method({"GET"})
     */
    public function index()
    {
        return $this->render('media/index.html.twig');
    }
}