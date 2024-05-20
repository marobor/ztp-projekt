<?php
/**
 * Tests for Article Controller.
 */

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class ArticleControllerTest.
 */
class ArticleControllerTest extends WebTestCase
{
    /**
     * Test index route.
     */
    public function testIndexRoute(): void
    {
        // given
        $client = static::createClient();

        // when
        $client->request('GET', '/');
        $resultHttpStatusCode = $client->getResponse()->getStatusCode();

        // then
        $this->assertEquals(200, $resultHttpStatusCode);
    }

    /**
     * Test index pagination.
     */
    public function testIndexPagintion(): void
    {
        #todo: test index pagination
    }
}
