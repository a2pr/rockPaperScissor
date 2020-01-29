<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RockPaperScissorController extends AbstractController
{
    /**
     * @Route("/home", name="rock_paper_scissor")
     */
    public function index()
    {
        return $this->render('rock_paper_scissor/index.html.twig', [
            'controller_name' => 'RockPaperScissorController',
        ]);
    }
}
