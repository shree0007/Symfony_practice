<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class HelloSymfonyController {

    #[Route('/I-study-symfony-today')]

    public function hellosymfony(){
        return new Response ("I study  Symfony today !");
    }
}


