<?php

namespace CrazyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use CrazyBundle\Entity\News;

class PagesController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        $listeNews = $em->getRepository('CrazyBundle:News')->getLastNews();
        
        return $this->render('CrazyBundle:Pagesinternes:index.html.twig', array('listeNews' => $listeNews));
    }

    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscriptionAction()
    {
        return $this->render('CrazyBundle:Pagesinternes:inscription.html.twig');
    }

    /**
     * @Route("/inscrits", name="inscrits")
     */
    public function inscritsAction()
    {
        return $this->render('CrazyBundle:Pagesinternes:inscrits.html.twig');
    }

    /**
     * @Route("/galeries", name="galeries")
     */
    public function galeriesAction()
    {
        return $this->render('CrazyBundle:Pagesinternes:galeries.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction()
    {
        return $this->render('CrazyBundle:Pagesinternes:contact.html.twig');
    }

    /**
     * @Route("/mentions-legales", name="mentions")
     */
    public function mentionsAction()
    {
        return $this->render('CrazyBundle:Pagesinternes:mentions-legales.html.twig');
    }

}
