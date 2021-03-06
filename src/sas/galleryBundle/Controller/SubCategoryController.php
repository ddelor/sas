<?php

namespace sas\galleryBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use sas\galleryBundle\Entity\SubCategory;
use sas\galleryBundle\Form\SubCategoryType;

/**
 * SubCategory controller.
 *
 * @Route("/admin/subcategory")
 */
class SubCategoryController extends Controller
{

    /**
     * Lists all SubCategory entities.
     *
     * @Route("/", name="subcategory")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('galleryBundle:SubCategory')->findAll();
        $categories = $em->getRepository('galleryBundle:Category')->findAll();
        $images = $em->getRepository('galleryBundle:Document')->findAll();

        return array(
            'entities' => $entities,
            'categories' => $categories,
            'images' => $images,
        );
    }
    /**
     * Creates a new SubCategory entity.
     *
     * @Route("/", name="subcategory_create")
     * @Method("POST")
     * @Template("galleryBundle:SubCategory:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('galleryBundle:Category')->findAll();

        $entity = new SubCategory();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            /*var_dump($entity);
            $s = serialize($entity->img->path);
            var_dump($s);
            var_dump($entity);*/
            /*var_dump($entity);*/
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('subcategory_show', array('id' => $entity->getId())));
        }

        return array(
            'categories' => $categories,
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a SubCategory entity.
     *
     * @param SubCategory $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(SubCategory $entity)
    {
        $form = $this->createForm(new SubCategoryType(), $entity, array(
            'action' => $this->generateUrl('subcategory_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new SubCategory entity.
     *
     * @Route("/new", name="subcategory_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new SubCategory();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a SubCategory entity.
     *
     * @Route("/{id}", name="subcategory_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('galleryBundle:SubCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SubCategory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing SubCategory entity.
     *
     * @Route("/{id}/edit", name="subcategory_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('galleryBundle:SubCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SubCategory entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a SubCategory entity.
    *
    * @param SubCategory $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(SubCategory $entity)
    {
        $form = $this->createForm(new SubCategoryType(), $entity, array(
            'action' => $this->generateUrl('subcategory_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing SubCategory entity.
     *
     * @Route("/{id}", name="subcategory_update")
     * @Method("PUT")
     * @Template("galleryBundle:SubCategory:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('galleryBundle:SubCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SubCategory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('subcategory_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a SubCategory entity.
     *
     * @Route("/{id}", name="subcategory_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('galleryBundle:SubCategory')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find SubCategory entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('subcategory'));
    }

    /**
     * Creates a form to delete a SubCategory entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('subcategory_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
