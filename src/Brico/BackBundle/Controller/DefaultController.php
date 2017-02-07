<?php

namespace Brico\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BricoBackBundle:Default:index.html.twig');
    }
}
