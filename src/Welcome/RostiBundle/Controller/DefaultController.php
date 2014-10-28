<?php

namespace Welcome\RostiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WelcomeRostiBundle:Default:index.html.twig');
    }
}
