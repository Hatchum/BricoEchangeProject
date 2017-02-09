<?php

namespace Brico\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Brico\BackBundle\Entity\Annonce;
use Brico\BackBundle\Entity\Categorie;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $annonces = $this->getDoctrine()->getManager()->getRepository('BricoBackBundle:Annonce')->getLastAnnonces();

        $tableau = $this->triCategorie($annonces);

        //die(var_dump($tableau));

        return $this->render('BricoFrontBundle:Default:index.html.twig',
                            array('tab_annonces' => $tableau)
            );
    }

    public function triCategorie($annonces){
        $tableau = array();

        foreach($annonces as $a) {
            foreach($a->getCategories() as $value){
                $tableau[$value->getDescription()] = array();
            }
        }
        foreach($annonces as $a) {
            foreach($a->getCategories() as $value){
                array_push($tableau[$value->getDescription()], $a);
            }
        }

        return $tableau;
    }
}
