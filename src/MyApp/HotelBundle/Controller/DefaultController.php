<?php

namespace MyApp\HotelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyAppHotelBundle:Default:index.html.twig');
    }
}
