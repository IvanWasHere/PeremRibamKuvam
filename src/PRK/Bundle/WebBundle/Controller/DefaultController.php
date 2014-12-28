<?php

namespace PRK\Bundle\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PRKWebBundle:Default:index.html.twig', array('name' => $name));
    }
}
