<?php

namespace Devschool\BiblioFilmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RealisateurController extends Controller {

	/**
    * @Route("/realisateurs", name="page_realisateurs")
    */
    public function listAction()
    {

        $realisateurs = $this->getDoctrine()->getRepository('DevschoolBiblioFilmsBundle:Realisateur')->findAll();

        $titre_de_la_page = 'Les réalisateurs';

        return $this->render('DevschoolBiblioFilmsBundle:Realisateur:list.html.twig',
        ['realisateurs' => $realisateurs,  'titre' => $titre_de_la_page]
        );
    }

    /**
    * @Route("/realisateur/{id}", requirements={"id": "\d+"}, name="page_realisateur")
    */
    public function showAction($id)
    {

        $films = $this->getDoctrine()->getRepository('DevschoolBiblioFilmsBundle:Film')->findByrealisateurId($id);

        return $this->render('DevschoolBiblioFilmsBundle:Realisateur:show.html.twig',
        ['films' => $films]
        	);
    }

}
