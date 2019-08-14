<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductyController extends AbstractController
{
    /**
     * @Route("/producty", name="producty")
     */
    public function products()
    {
        return $this->render('producty.html.twig',
            ['project_name'=>'Коровка из Кореновки',
            ]);
    }
}