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
}
