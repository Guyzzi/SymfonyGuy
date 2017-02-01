<?php

namespace Devschool\BiblioFilmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="page_accueil")
     */
    public function indexAction()
    {
        return $this->render('DevschoolBiblioFilmsBundle:Default:index.html.twig');
    }

    /**
    * @Route("/films", name="page_films")
    */
    public function listAction()
    {

    	$films = $this->getDoctrine()->getRepository('DevschoolBiblioFilmsBundle:Film')->findAll();

    	$titre_de_la_page = 'Films de la bibliothèques';

        return $this->render('DevschoolBiblioFilmsBundle:Film:list.html.twig',
        ['films' => $films,  'titre' => $titre_de_la_page]
        );
    }

    /**
    * @Route("/film/{id}", requirements={"id": "\d+"}, name="page_film")
    */
    public function showAction($id)
    {

    	$film = $this->getDoctrine()->getRepository('DevschoolBiblioFilmsBundle:Film')->find($id);

        return $this->render('DevschoolBiblioFilmsBundle:Film:show.html.twig',
        ['film' => $film]
        	);
    }

    /**
    * @Route("/realisateurs", name="page_realisateurs")
    */
    public function listAction1()
    {

        $realisateurs = $this->getDoctrine()->getRepository('DevschoolBiblioFilmsBundle:Realisateur')->findAll();

        $titre_de_la_page = 'Les réalisateurs';

        return $this->render('DevschoolBiblioFilmsBundle:Realisateur:list.html.twig',
        ['realisateurs' => $realisateurs,  'titre' => $titre_de_la_page]
        );
    }

}
