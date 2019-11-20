<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SweetController extends AbstractController
{
    /**
     * @Route("/", name="sweet")
     */
    public function index()
    {
        return $this->render('sweet/index.html.twig', [
            'nomPatisserie' => 'Bourse Orange',
        ]);
    }
    
    /**
     * @Route("/modif", name="modif")
     */
    public function modif ()
    {
        return $this->render('sweet/modif.html.twig');
    }

    /**
     * @Route("/new", name="new")
     */
    public function new ()
    {
        return $this->render('sweet/new.html.twig');
    }
}
