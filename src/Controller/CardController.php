<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CardController extends AbstractController
{
    /**
     * @Route("/card", name="card")
     */
    public function card()
    {
        return $this->render('card.html.twig', [
            'project_name' => 'Коровка из Кореновки',
        ]);
    }
}