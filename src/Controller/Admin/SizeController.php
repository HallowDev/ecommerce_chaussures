<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SizeController extends AbstractController
{
    #[Route('admin/size', name: 'size')]
    public function index(): Response
    {
        return $this->render('admin/size/index.html.twig', [
            'controller_name' => 'SizeController',
        ]);
    }
}
