<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MorozhenoeController extends AbstractController
{
    /**
     * @Route("/producty/morozhenoe", name="morozhenoe")
     */
    public function morozhenoe()
    {
        return $this->render('morozhenoe.html.twig',
        ['project_name'=>'Коровка из Кореновки',
        ]);
    }

}