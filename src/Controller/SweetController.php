<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\Sweets;
use App\Repository\SweetsRepository;
use App\Form\SweetType;

class SweetController extends AbstractController
{
    /**
     * @Route("/", name="sweet")
     */
    public function index(SweetsRepository $repo)
    {   
        $sweets = $repo->findAll();
                
        return $this->render('sweet/index.html.twig', [
            'nomPatisserie' => 'Bourse Orange',
            'sweets' => $sweets
        ]);
    }

    /**
     * @Route("/ingredients/{id}", name = "ingredients")
     */
    public function ingredients(Sweets $sweets) 
    {

        return $this->render('sweet/ingredients.html.twig',[
            'sweets' => $sweets,
        ]);
    }

    /**
     * @Route("/new", name="new")
     * @Route("/sweets/{id}/edit", name="edit")
     */
    public function form(Sweets $sweet = null, Request $request, ObjectManager $manager)
    {
        if(!$sweet){
            $sweet = new Sweets();
        }

        $form = $this->createForm(SweetType::class, $sweet);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manager ->persist($sweet);
            $manager->flush();

            return $this->redirectToRoute('ingredients', ['id' => $sweet->getId()]);
        }

        return $this->render('sweet/new.html.twig',[
            'formSweet' => $form->createView(),
            'editMode' => $sweet->getId() !==null
        ]);
    }
}
