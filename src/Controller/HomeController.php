<?php
/**
 * Created by PhpStorm.
 * User: ahmadzeidan
 * Date: 09/07/2020
 * Time: 13:27
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    /**
    @Route("/")
     */

    public function Home()
    {
        $number = random_int(0, 50);

        return $this->render('index.html.twig', [
            'number' => $number,
        ]);
    }
}