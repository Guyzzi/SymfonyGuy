<?php

namespace Devschool\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/admin", name="page_admin_accueil")
     */
    public function indexAction()
    {
        return $this->render('DevschoolAdminBundle:Default:index.html.twig');
    }
}
