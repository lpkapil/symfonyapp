<?php

namespace Custom\CMSBundle\Controller;

use Custom\CMSBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Category controller.
 *
 */
class CategoryController extends Controller {

    /**
     * Lists all category entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('CustomCMSBundle:Category')->findAll();
        return $this->render('CustomCMSBundle:category:index.html.twig', array(
                    'categories' => $categories,
        ));
    }

    /**
     * Creates a new category entity.
     *
     */
    public function newAction(Request $request) {
        $category = new Category();
        $form = $this->createForm('Custom\CMSBundle\Form\CategoryType', $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush($category);

            return $this->redirectToRoute('cms_category_show', array('id' => $category->getId()));
        }

        return $this->render('CustomCMSBundle:category:new.html.twig', array(
                    'category' => $category,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a category entity.
     *
     */
    public function showAction(Category $category) {
        $deleteForm = $this->createDeleteForm($category);

        return $this->render('CustomCMSBundle:category:show.html.twig', array(
                    'category' => $category,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing category entity.
     *
     */
    public function editAction(Request $request, Category $category) {
        $deleteForm = $this->createDeleteForm($category);
        $editForm = $this->createForm('Custom\CMSBundle\Form\CategoryType', $category);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cms_category_edit', array('id' => $category->getId()));
        }

        return $this->render('CustomCMSBundle:category:edit.html.twig', array(
                    'category' => $category,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a category entity.
     *
     */
    public function deleteAction(Request $request, Category $category) {
        $form = $this->createDeleteForm($category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($category);
            $em->flush($category);
        }

        return $this->redirectToRoute('cms_category_index');
    }

    /**
     * Creates a form to delete a category entity.
     *
     * @param Category $category The category entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Category $category) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('cms_category_delete', array('id' => $category->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
