<?php

namespace Igg\GuiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IggGuiaBundle:Default:index.html.twig', array('name' => $name));
    }
}
