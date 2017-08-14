<?php

namespace CrazyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use CrazyBundle\Entity\News;

use Symfony\Component\HttpFoundation\Request;

use CrazyBundle\Form\BenevolesType;

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

    /**
     * @Route("/benevoles", name="benevoles")
     */
    public function benevolesAction(Request $request)
    {
        $form = $this->get('form.factory')->create(BenevolesType::class);

        if($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {
            $data = $form->getData();

            $message = \Swift_Message::newInstance()
            ->setSubject('Formulaire bénévole Crazy Disco Trail')
            ->setFrom('postmaster@herouvilledanslacourse.fr')
            ->setTo('crazydiscotrail@gmail.com')
            ->setBody($this->renderView('Emails/registration.html.twig', array('data' => $data)), 'text/html');

            $this->get('mailer')->send($message);

            $request->getSession()->getFlashBag()->add('success', 'Merci pour votre participation ! Nous prendrons contact rapidement avec vous !');

            return $this->redirectToRoute('benevoles');
        }
           
    
        
        return $this->render('CrazyBundle:Pagesinternes:benevole.html.twig', array('form' => $form->createView(),
        ));
    }

}
