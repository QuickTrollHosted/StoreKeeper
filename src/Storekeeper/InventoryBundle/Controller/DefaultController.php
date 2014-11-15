<?php

namespace Storekeeper\InventoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
       
        $part1 = $this->getDoctrine()
        ->getRepository('StorekeeperInventoryBundle:Part')
        ->findOneById(1);
        
        $vars = array('name' => 'test',
                       'part'=> $part1);
        return $this->render('StorekeeperInventoryBundle:Default:index.html.twig', $vars);
        
        
        //$translator->trans('Symfony is great!');
        //$t = $this->get('translator')->trans('Symfony2 is great');
        //debug($t);
        //$t = $this->get('translator')->trans('Hello %name%', array('%name%' = > $name));
        //return $this->render('StorekeeperInventoryBundle:Default:index.html.twig', $vars);
        //return new Response($t);
    }
}
