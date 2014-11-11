<?php

namespace Storekeeper\InventoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//Added bu Fanch
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $vars = array('name' => 'test');
        //$translator->trans('Symfony is great!');
        //$t = $this->get('translator')->trans('Symfony2 is great');
        //debug($t);
        //$t = $this->get('translator')->trans('Hello %name%', array('%name%' = > $name));
        return $this->render('StorekeeperInventoryBundle:Default:index.html.twig', $vars);
        //return new Response($t);
    }
}
