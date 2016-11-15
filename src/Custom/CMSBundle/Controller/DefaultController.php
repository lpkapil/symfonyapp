<?php

namespace Custom\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository('CustomCMSBundle:Page')->findAll();
        return $this->render('CustomCMSBundle:Default:index.html.twig', [
                    'pages' => $pages
        ]);
    }

    /**
     * Display Page Method
     */
    public function displayAction($id) {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('CustomCMSBundle:Page')->find($id);
        return $this->render('CustomCMSBundle:Default:display.html.twig', [
                    'page' => $page
        ]);
    }

}
