<?php
/**
 * Article service with mock repository - Test.
 */
namespace App\Tests\Service;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Entity\Article;

/**
 * Class ArticleServiceWithMockRepositoryTest.
 */
class ArticleServiceWithMockRepositoryTest extends WebTestCase
{
    /**
     * Test mock Article Service method FindOneById.
     */
    public function ArticleMockService()
    {
        $expectedArticle = new Article();
    }
}
