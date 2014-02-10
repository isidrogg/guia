<?php

namespace Igg\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IggApiBundle:Default:index.html.twig', array('name' => $name));
    }
}
