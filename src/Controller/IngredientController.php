<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IngredientController extends AbstractController
{
   
    public function list(): Response
    {
        
        return new Response('<html><body>Liste des ingrédients</body></html>');
    }
}
