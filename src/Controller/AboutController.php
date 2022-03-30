<?php
// src/Controller/AboutController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController
{
    /**
    * @Route("/about")
    */
    public function About()
    {
        include 'about1.html';
        return new Response();
    }
}