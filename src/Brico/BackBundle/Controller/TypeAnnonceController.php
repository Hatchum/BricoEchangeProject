<?php

namespace Brico\BackBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Brico\BackBundle\Entity\TypeAnnonce;
use Brico\BackBundle\Form\TypeAnnonceType;

/**
 * TypeAnnonce controller.
 *
 */
class TypeAnnonceController extends Controller
{
    /**
     * Lists all TypeAnnonce entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typeAnnonces = $em->getRepository('BricoBackBundle:TypeAnnonce')->findAll();

        return $this->render('typeannonce/index.html.twig', array(
            'typeAnnonces' => $typeAnnonces,
        ));
    }

    /**
     * Creates a new TypeAnnonce entity.
     *
     */
    public function newAction(Request $request)
    {
        $typeAnnonce = new TypeAnnonce();
        $form = $this->createForm('Brico\BackBundle\Form\TypeAnnonceType', $typeAnnonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeAnnonce);
            $em->flush();

            return $this->redirectToRoute('typeannonce_show', array('id' => $typeannonce->getId()));
        }

        return $this->render('typeannonce/new.html.twig', array(
            'typeAnnonce' => $typeAnnonce,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TypeAnnonce entity.
     *
     */
    public function showAction(TypeAnnonce $typeAnnonce)
    {
        $deleteForm = $this->createDeleteForm($typeAnnonce);

        return $this->render('typeannonce/show.html.twig', array(
            'typeAnnonce' => $typeAnnonce,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TypeAnnonce entity.
     *
     */
    public function editAction(Request $request, TypeAnnonce $typeAnnonce)
    {
        $deleteForm = $this->createDeleteForm($typeAnnonce);
        $editForm = $this->createForm('Brico\BackBundle\Form\TypeAnnonceType', $typeAnnonce);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeAnnonce);
            $em->flush();

            return $this->redirectToRoute('typeannonce_edit', array('id' => $typeAnnonce->getId()));
        }

        return $this->render('typeannonce/edit.html.twig', array(
            'typeAnnonce' => $typeAnnonce,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TypeAnnonce entity.
     *
     */
    public function deleteAction(Request $request, TypeAnnonce $typeAnnonce)
    {
        $form = $this->createDeleteForm($typeAnnonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typeAnnonce);
            $em->flush();
        }

        return $this->redirectToRoute('typeannonce_index');
    }

    /**
     * Creates a form to delete a TypeAnnonce entity.
     *
     * @param TypeAnnonce $typeAnnonce The TypeAnnonce entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypeAnnonce $typeAnnonce)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typeannonce_delete', array('id' => $typeAnnonce->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
