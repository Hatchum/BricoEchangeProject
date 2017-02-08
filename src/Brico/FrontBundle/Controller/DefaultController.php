<?php

namespace Brico\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BricoFrontBundle:Default:index.html.twig');
    }
}
