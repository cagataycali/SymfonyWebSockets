<?php

namespace SocketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SocketBundle:Default:index.html.twig');
    }
}
