<?php
/**
 * Article Controller
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

/**
 * class ArticleController.
 */
class ArticleController extends AbstractController
{
    /**
     * Index function.
     *
     * @return Response
     */
    #[Route(
        '',
        name: 'article_index',
        methods: 'GET'
    )]
    public function index(): Response
    {
        return new Response();
    }
}