<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PrincipalController extends AbstractController
{
    /**
     * @Route("/principal", name="principal")
     */
    public function index()
    {
        return $this->render('principal/index.html.twig', [
            'controller_name' => 'PrincipalController',
        ]);
    }
    
    /**
     * @Route("/welcome/{nom}")
     */
    public function welcome($nom) {
        return $this->render('principal/welcome.html.twig', array("nom" => $nom));
    }
    
    /**
     * @Route("/infos/{dep}/{sexe}")
     */
    public function infos($dep, $sexe) {
        return $this->render('principal/infos.html.twig', array("dep" => $dep, "sexe" => $sexe));
    }
}
