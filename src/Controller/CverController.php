<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CverController extends AbstractController
{
    /**
     * @Route("/cver", name="cver")
     */
    public function index()
    {
        return $this->render('cver/index.html.twig', [
            'controller_name' => 'CverController',
        ]);
    }
}
