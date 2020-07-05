<?php

namespace App\Controller;

use App\Repository\PromoAppreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ApprenantController extends AbstractController
{
    /**
     * afficher un apprenant
     * 
     * @Route("/apprenant/profil", name="apprenant_profil")
     */
    public function apprenant(PromoAppreRepository $repo)
    {
        $apprenant=$repo->findBy(['apprenant'=> $this->getUser()]);
        
        return $this->render('apprenant/profil.html.twig', [
            'apprenant'=>$apprenant
        ]);
    } 
}
