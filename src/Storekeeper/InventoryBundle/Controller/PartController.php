<?php

namespace Storekeeper\InventoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
}
