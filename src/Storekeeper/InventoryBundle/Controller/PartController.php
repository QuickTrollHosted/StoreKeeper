<?php

namespace Storekeeper\InventoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//Added bu Fanch
use Symfony\Component\HttpFoundation\Response;

class PartController extends Controller
{
    public function viewAction($name)
    {
        //Charger l'objet et retourner dans twig
        $part = $this->getDoctrine()
        ->getRepository('StorekeeperInventoryBundle:Part')
        ->find($name);
        
        $vars = array('name' => $name);
        return $this->render('StorekeeperInventoryBundle:Part:view.html.twig', $vars);
    }
}
