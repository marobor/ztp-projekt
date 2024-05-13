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
     *
     * @return void
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
}
