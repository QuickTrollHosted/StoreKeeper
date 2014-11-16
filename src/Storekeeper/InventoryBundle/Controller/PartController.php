<?php

namespace Storekeeper\InventoryBundle\Controller;

use Storekeeper\InventoryBundle\Entity\Part;
use Storekeeper\InventoryBundle\Form\PartType;

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
        
        $form = $this->createForm(new PartType, $part);
        $form->add('save', 'submit');
        
        //$validator = $this->get('validator');
        //$errorList = $validator->validate($part);
        
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
