<?php

namespace sas\galleryBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Admin controller.
 *
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /**
    * @Route("/", name="admin")
    * @Template("galleryBundle:Admin:index.html.twig")
    */
    public function adminAction()
    {
        return $this->render('galleryBundle:Admin:index.html.twig');
    }
}
