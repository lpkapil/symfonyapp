<?php

namespace Custom\CMSBundle\Controller;

use Custom\CMSBundle\Entity\Page;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Page controller.
 *
 */
class PageController extends Controller {

    /**
     * Lists all page entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $pages = $em->getRepository('CustomCMSBundle:Page')->findAll();

        return $this->render('CustomCMSBundle:page:index.html.twig', array(
                    'pages' => $pages,
        ));
    }

    /**
     * Creates a new page entity.
     *
     */
    public function newAction(Request $request) {


        //Ajax Handler
//        if ($request->isXmlHttpRequest()) {
//            $response = new JsonResponse(array('name' => 'test'));
//            echo $response->getContent();
//            exit();
//        }
        //Conventional Handler
        $page = new Page();
        $form = $this->createForm('Custom\CMSBundle\Form\PageType', $page);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

//            $validator = $this->get('validator');
//            foreach ($validator->validate($page) as $error) {
//                $errors[$error->getPropertyPath()][] = $error->getMessage();
//            }
//            echo "<pre>";
//            print_r($errors);
//            echo "</pre>";
//            die();


            $em = $this->getDoctrine()->getManager();
            $em->persist($page);
            $em->flush($page);

            return $this->redirectToRoute('cms_page_show', array('id' => $page->getId()));
        }

        return $this->render('CustomCMSBundle:page:new.html.twig', array(
                    'page' => $page,
                    'form' => $form->createView(),
                    'errors'
        ));
    }

    /**
     * Finds and displays a page entity.
     *
     */
    public function showAction(Page $page) {
        $deleteForm = $this->createDeleteForm($page);

        return $this->render('CustomCMSBundle:page:show.html.twig', array(
                    'page' => $page,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing page entity.
     *
     */
    public function editAction(Request $request, Page $page) {
        $deleteForm = $this->createDeleteForm($page);
        $editForm = $this->createForm('Custom\CMSBundle\Form\PageType', $page);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cms_page_edit', array('id' => $page->getId()));
        }

        return $this->render('CustomCMSBundle:page:edit.html.twig', array(
                    'page' => $page,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a page entity.
     *
     */
    public function deleteAction(Request $request, Page $page) {
        $form = $this->createDeleteForm($page);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($page);
            $em->flush($page);
        }

        return $this->redirectToRoute('cms_page_index');
    }

    /**
     * Creates a form to delete a page entity.
     *
     * @param Page $page The page entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Page $page) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('cms_page_delete', array('id' => $page->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
