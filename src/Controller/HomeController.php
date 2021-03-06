<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class HomeController extends AbstractController
{

    public function __construct()
    {
    }

    /**
     * @Route("/", name="home.index")
     * @return Response
     */
    public function index() : Response
    {
        return new Response($this->render('home/index.html.twig'));
    }
}