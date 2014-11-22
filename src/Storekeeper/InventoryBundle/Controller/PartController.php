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
    
    
    
    public function newAction(Request $request)
    {
        $part = new Part();
        $form = $this->createForm(new PartType);
        $form->add('save', 'submit');
        
        $form->handleRequest($request);

        //Traitement de la validation du formulaire
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $newPart = $form->getData();
            $em->persist($newPart);
            $em->flush();
            return $this->redirect($this->generateUrl('part_view', array('id'=>$newPart->getId())));
        }
        
        return $this->render('StorekeeperInventoryBundle:Part:new.html.twig',
                   array('form'=> $form->createView()));
    }
    
    public function searchAction($id)
    {
        
    }
    
    public function statsAction()
    {
        //Charge 
        $parts = $this->getDoctrine()
        ->getRepository('StorekeeperInventoryBundle:Part')
        ->findAll();

        $vars = array('stats'=> count($parts));
        return $this->render('StorekeeperInventoryBundle:Part:stats.html.twig', $vars);
    }
    
}
