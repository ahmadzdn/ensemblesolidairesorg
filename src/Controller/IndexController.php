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

class IndexController extends AbstractController
{

    /**
    @Route("/")
     */

    public function number()
    {
        $number = random_int(0, 100);

        return $this->render('index/index.html.twig', [
            'number' => $number,
        ]);
    }
}