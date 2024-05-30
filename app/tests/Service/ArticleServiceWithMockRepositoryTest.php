<?php
/**
 * Article service with mock repository - Test.
 */

namespace App\Tests\Service;

use App\Entity\Article;
use App\Service\ArticleService;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\ArticleRepository;

/**
 * Class ArticleServiceWithMockRepositoryTest.
 */
class ArticleServiceWithMockRepositoryTest extends WebTestCase
{
    /**
     * Set up.
     */
    protected function setUp(): void
    {
        $this->articleRepository = $this->createMock(ArticleRepository::class);
        $this->paginator = $this->createMock(PaginatorInterface::class);
        $this->articleService = new ArticleService($this->articleRepository, $this->paginator);
    }

    /**
     * Test paginated list.
     */
    public function testGetPaginatedList(): void
    {
        // given
        $pagination = $this->createMock(PaginationInterface::class);

        $page = 1;
        $itemsPerPage = ArticleService::PAGINATOR_ITEMS_PER_PAGE;

        // when
        $this->paginator->expects($this->once())
            ->method('paginate')
            ->with(
                $this->articleRepository->queryAll(),
                $page,
                $itemsPerPage
            )
            ->willReturn($pagination);
        $result = $this->articleService-getPaginatedList($page);

        // then
        $this->assertSame($pagination, $result);
    }
}
