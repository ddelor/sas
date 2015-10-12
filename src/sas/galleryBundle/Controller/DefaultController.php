<?php

namespace sas\galleryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
    * @Route("/", name="home")
    * @Template("galleryBundle:Default:index.html.twig")
    */
    public function homeAction()
    {
        return $this->render('galleryBundle:Default:index.html.twig');
    }

    /**
    * @Route("/peintures", name="peintures")
    * @Template("galleryBundle:Default:rub.html.twig")
    */
    public function peinturesAction()
    {
        $emSubCategory = $this->getDoctrine()->getRepository('galleryBundle:SubCategory');
        $subCategoryList = $emSubCategory->findBy(
                array('category' => 1)
            );
        
        return array(
            'subCategoryList' => $subCategoryList
            );
    }

    /**
    * @Route("/illustrations", name="illustrations")
    * @Template("galleryBundle:Default:rub.html.twig")
    */
    public function illustrationsAction()
    {
        $emSubCategory = $this->getDoctrine()->getRepository('galleryBundle:SubCategory');
        $subCategoryList = $emSubCategory->findBy(
                array('category' => 2)
            );
        
        return array(
            'subCategoryList' => $subCategoryList
            );
    }

    /**
    * @Route("/carnets", name="carnets")
    * @Template("galleryBundle:Default:rub.html.twig")
    */
    public function carnetsAction()
    {
        $emSubCategory = $this->getDoctrine()->getRepository('galleryBundle:SubCategory');
        $subCategoryList = $emSubCategory->findBy(
                array('category' => 3)
            );
        
        return array(
            'subCategoryList' => $subCategoryList
            );
    }

    /**
    * @Route("/expos", name="expos")
    * @Template("galleryBundle:Default:expos.html.twig")
    */
    public function exposAction()
    {
        /*return $this->render('galleryBundle:Default:expos.html.twig');*/
        $emExpoPeint = $this->getDoctrine()->getRepository('galleryBundle:Event');
        $queryPeint = $emExpoPeint  ->createQueryBuilder('r')
                                    ->where('r.category = 1')
                                    ->getQuery();
        $resultPeint = $queryPeint->getResult();

        $emExpoIllus = $this->getDoctrine()->getRepository('galleryBundle:Event');
        $queryIllus = $emExpoIllus  ->createQueryBuilder('r')
                                    ->where('r.category = 2')
                                    ->getQuery();
        $resultIllus = $queryIllus->getResult();

        return array(
            'expoPeintList' => $resultPeint,
            'expoIllusList' => $resultIllus,
            );
    }

    /**
    * @Route("/contact", name="contact")
    * @Template("galleryBundle:Default:contact.html.twig")
    */
    public function contactAction()
    {
        return $this->render('galleryBundle:Default:contact.html.twig');
    }

    /**
    * @Route("/gallerie/{id}", name="gallery")
    * @Template("galleryBundle:Default:gallery.html.twig")
    */
    public function galleryAction($id)
    {
        $emWork = $this->getDoctrine()->getRepository('galleryBundle:Work');
        $query = $emWork    ->createQueryBuilder('r')
                            ->where('r.subCategory = '.$id)
                            ->getQuery();
        $result = $query->getResult();

        $emSubCategory = $this->getDoctrine()->getRepository('galleryBundle:SubCategory');
        $queryCat = $emSubCategory  ->createQueryBuilder('r')
                                    ->where('r.id = '.$id)
                                    ->getQuery();
        $resultCat = $queryCat->getResult();
        
        return array(
            'workList' => $result,
            'subCategory' => $resultCat[0],
            );
    }
}
