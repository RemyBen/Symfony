<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Employe;

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
    
    /**
     * @Route("/employes", name="employes")
     * @param RegistryInterface $doctrine
     */
    public function afficheEmployes(ManagerRegistry $doctrine) {
        $employes = $doctrine->getRepository(Employe::class)->findAll();
        $titre = "Liste des employés";
        return $this->render('principal/employes.html.twig', compact('titre', 'employes'));
    }
    
    /**
     * @Route("/employe/{id}", name="unEmploye", requirements={"id":"\d+"})
     * @param ManagerRegistry $doctrine
     * @param int $id
     * @return type
     */
    public function afficheUnEmploye(ManagerRegistry $doctrine, int $id) {
        $employe = $doctrine->getRepository(Employe::class)->find($id);
        $titre = "Employé n° " . $id;
        return $this->render('principal/unEmploye.html.twig', compact('titre', 'employe'));
    }
}
