<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\ThemeOfficiel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Themeofficiel controller.
 *
 */
class ThemeOfficielController extends Controller
{
    /**
     * Lists all themeOfficiel entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $themeOfficiels = $em->getRepository('BlogBundle:ThemeOfficiel')->findAll();

        return $this->render('themeofficiel/index.html.twig', array(
            'themeOfficiels' => $themeOfficiels,
        ));
    }

    /**
     * Creates a new themeOfficiel entity.
     *
     */
    public function newAction(Request $request)
    {
        $themeOfficiel = new Themeofficiel();
        $form = $this->createForm('BlogBundle\Form\ThemeOfficielType', $themeOfficiel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($themeOfficiel);
            $em->flush();

            return $this->redirectToRoute('themeofficiel_show', array('id' => $themeOfficiel->getId()));
        }

        return $this->render('themeofficiel/new.html.twig', array(
            'themeOfficiel' => $themeOfficiel,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a themeOfficiel entity.
     *
     */
    public function showAction(ThemeOfficiel $themeOfficiel)
    {
        $deleteForm = $this->createDeleteForm($themeOfficiel);

        return $this->render('themeofficiel/show.html.twig', array(
            'themeOfficiel' => $themeOfficiel,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing themeOfficiel entity.
     *
     */
    public function editAction(Request $request, ThemeOfficiel $themeOfficiel)
    {
        $deleteForm = $this->createDeleteForm($themeOfficiel);
        $editForm = $this->createForm('BlogBundle\Form\ThemeOfficielType', $themeOfficiel);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('themeofficiel_edit', array('id' => $themeOfficiel->getId()));
        }

        return $this->render('themeofficiel/edit.html.twig', array(
            'themeOfficiel' => $themeOfficiel,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a themeOfficiel entity.
     *
     */
    public function deleteAction(ThemeOfficiel $themeOfficiel)
    {
        //$form = $this->createDeleteForm($themeOfficiel);
        //$form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $em->remove($themeOfficiel);
        $em->flush();

        return $this->redirectToRoute('themeofficiel_index');
    }


     /**
     * Creates a form to delete a themeOfficiel entity.
     *
     * @param ThemeOfficiel $themeOfficiel The themeOfficiel entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ThemeOfficiel $themeOfficiel)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('themeofficiel_delete', array('id' => $themeOfficiel->getId())))
            ->setMethod('POST') /*MOdification de la methode en POST*/
            ->getForm()
            ;
    }


/******************************AJOUT ******************************/
    public function themeUserAction()
    {
        $em=$this->getDoctrine()->getManager();
        $role = $em->getRepository('BlogBundle:ThemeOfficiel')->findAll();
 
        return $this->render('themeOfficiel/index.html.twig', array('user' => $user, 'role' =>$roles(),));

    }

}
