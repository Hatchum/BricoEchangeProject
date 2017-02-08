<?php

namespace Brico\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BricoUserBundle:Default:index.html.twig');
    }
}
