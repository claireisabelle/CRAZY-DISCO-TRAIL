<?php

namespace CrazyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CourseController extends Controller
{
    
    /**
     * @Route("/infos", name="infos")
     */
    public function infosAction()
    {
        return $this->render('CrazyBundle:Pagescourse:jourj.html.twig');
    }

    /**
     * @Route("/infos/jourj", name="infos_jourj")
     */
    public function jourjAction()
    {
        return $this->render('CrazyBundle:Pagescourse:jourj.html.twig');
    }

    /**
     * @Route("/infos/dossards", name="infos_dossards")
     */
    public function dossardsAction()
    {
        return $this->render('CrazyBundle:Pagescourse:dossard.html.twig');
    }

    /**
     * @Route("/infos/acces", name="infos_acces")
     */
    public function accesAction()
    {
        return $this->render('CrazyBundle:Pagescourse:acces.html.twig');
    }

    /**
     * @Route("/infos/reglement", name="infos_reglement")
     */
    public function reglementAction()
    {
        return $this->render('CrazyBundle:Pagescourse:reglement.html.twig');
    }

    /**
     * @Route("/infos/bon-a-savoir", name="infos_savoir")
     */
    public function savoirAction()
    {
        return $this->render('CrazyBundle:Pagescourse:bon-a-savoir.html.twig');
    }

    /**
     * @Route("/infos/questions", name="infos_questions")
     */
    public function questionsAction()
    {
        return $this->render('CrazyBundle:Pagescourse:questions-frequentes.html.twig');
    }
}
