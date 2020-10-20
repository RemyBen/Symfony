<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 *@Route("/employe/", name="employe_")
 * @author remy.benalouane
 */
class EmployeController extends AbstractController{
    
    /**
     * @Route(path="employe/{id}", name="employe_voir")
     * @param int $id
     * @return type
     */
    public function voir(int $id) {
        return $this->render('employe/voir.html.twig', ['id' => $id]);
    }
    
}
