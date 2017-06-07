<?php

namespace CrazyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;

use CrazyBundle\Entity\News;
use CrazyBundle\Form\NewsType;

class NewsController extends Controller
{
    
    /**
     * @Route("/news/dashboard", name="dashboard")
     */
    public function dashboardAction()
    {
        $em = $this->getDoctrine()->getManager();

        $listeNews = $em->getRepository('CrazyBundle:News')->getNews();

        return $this->render('CrazyBundle:News:dashboard.html.twig', array('listeNews' => $listeNews));

    }

    /**
     * @Route("/news/ajouter", name="ajouter-actualite")
     */
    public function ajouterAction(Request $request)
    {
        
        $news = new News();

        $form = $this->get('form.factory')->create(NewsType::class, $news);

        if($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {
            

            $em = $this->getDoctrine()->getManager();
            $em->persist($news);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', 'La nouvelle actualité a bien été ajoutée.');

            return $this->redirectToRoute('dashboard');
        }

        // Si le formulaire n'a pas été posté, on affiche la page du formulaire pour pouvoir le poster
        return $this->render('CrazyBundle:News:ajouter.html.twig', array('form' => $form->createView(),
        ));

    }

    /**
     * @Route("/news/editer/{id}", name="editer-actualite", requirements={"id": "\d+"})
     */
    public function editerAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();

        $news = $em->getRepository('CrazyBundle:News')->find($id);

        if(!$news)
        {
            throw $this->createNotFoundException('La news n° '.$id.' est inconnue.');
        }

        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', 'La news a bien été mise à jour.');

            return $this->redirectToRoute('dashboard');
        }

        return $this->render('CrazyBundle:News:editer.html.twig', array('news' => $news,'form' => $form->createView()));

    }

    /**
     * @Route("/news/supprimer/{id}", name="supprimer-actualite", requirements={"id": "\d+"})
     */
    public function supprimerAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();

        $news = $em->getRepository('CrazyBundle:News')->find($id);

        if(!$news)
        {
            throw $this->createNotFoundException('La news n° '.$id.' est inconnue.');
        }

        $form = $this->createFormBuilder()->getForm();

        if($form->handleRequest($request)->isValid())
        {
            $em->remove($news);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', 'La news a bien été supprimée.');
            return $this->redirectToRoute('dashboard');
        }

        return $this->render('CrazyBundle:News:supprimer.html.twig', array('news' => $news, 'form' => $form->createView()));

    }

    /**
     * @Route("/actualites/post/{id}", name="actualites_post", requirements={"id": "\d+"})
     */
    public function postAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();

        $news = $em->getRepository('CrazyBundle:News')->find($id);

        if(!$news)
        {
            throw $this->createNotFoundException('La news n° '.$id.' est inconnue.');
        }

        
        return $this->render('CrazyBundle:News:article.html.twig', array('news' => $news));

    }

    /**
     * @Route("/actualites/{page}", name="actualites", requirements={"page": "\d+"}, defaults={"page" = 1})
     */
    public function actualitesAction($page)
    {
        if ($page < 1) 
        {
            throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        $nbPerPage = 15;

        $em = $this->getDoctrine()->getManager();

        $listeNews = $em->getRepository('CrazyBundle:News')->getNewsPaginator($page, $nbPerPage);
        
        $nbPages = ceil(count($listeNews)/$nbPerPage);

        if ($page > $nbPages) 
        {
            throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        return $this->render('CrazyBundle:News:actualites.html.twig', array('listeNews' => $listeNews, 'nbPages' => $nbPages, 'page' => $page));
    }

    
}
