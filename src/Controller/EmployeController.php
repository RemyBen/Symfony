<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

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
    
    /**
     * @Route("employeV2/{id}", name="voirV2")
     * @param int $id
     * @return type
     * @Template("employe/voir.html.twig")
     */
    public function voirEmployeV2(int $id) {
        return array('id'=>$id);        
    }
    
}
