<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VaphelnyjstakanController extends AbstractController
{
    /**
     * @Route("/producty/morozhenoe/portsionnoe/vaphelnyjstakan", name="vaphelnyjstakan")
     */
    public function vaphstakan()
    {
        return $this->render('vaphelnyjstakan.html.twig',
            ['project_name'=>'Коровка из Кореновки',
            ]);
    }

}