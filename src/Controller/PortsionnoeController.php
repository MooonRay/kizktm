<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PortsionnoeController extends AbstractController
{
    /**
     * @Route("/producty/morozhenoe/portsionnoe", name="portsionnoe")
     */
    public function portsionnoe()
    {
        return $this->render('portsionnoe.html.twig',
            ['project_name'=>'Коровка из Кореновки',
            ]);
    }
}