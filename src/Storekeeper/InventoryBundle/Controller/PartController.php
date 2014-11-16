<?php

namespace Storekeeper\InventoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

class PartController extends Controller
{
    public function viewAction($id)
    {
        //Charger l'objet et retourner dans twig
        $part = $this->getDoctrine()
        ->getRepository('StorekeeperInventoryBundle:Part')
        ->findOneById($id);
        
        $vars = array('id' => $id,
                    'part'=> $part);
        return $this->render('StorekeeperInventoryBundle:Part:view.html.twig', $vars);
    }
    
    
    
    
    public function editAction($id, Request $request)
    {
        //Charger l'objet a editer
        $part = $this->getDoctrine()
        ->getRepository('StorekeeperInventoryBundle:Part')
        ->findOneById($id);
        
        //Creation du formulaire
        $form = $this->createFormBuilder($part)
                ->setAction($this->generateUrl('part_edit', array('id'=>1)))
                ->add('name', null, array('max_length' => 255 ))
                ->add('description', null, array('max_length' => 255 ))
                ->add('barcode', null, array('max_length' => 13 ))
                ->add('save', 'submit')
                ->getForm(); 
        
        $validator = $this->get('validator');
        $errorList = $validator->validate($part);
        
        $form->handleRequest($request);

        //Traitement de la validation du formulaire
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($part);
            $em->flush();
            return $this->redirect($this->generateUrl('part_view', array('id'=>$id)));
        }
        

        return $this->render('StorekeeperInventoryBundle:Part:edit.html.twig',
                   array('id' => $id,
                    'part'=> $part,
                    'form'=> $form->createView()));
    }
    
}
