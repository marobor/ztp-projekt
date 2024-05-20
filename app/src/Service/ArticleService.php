<?php
/**
 * Article service.
 */

namespace App\Service;

use Knp\Component\Pager\Event\PaginationEvent;
use Knp\Component\Pager\PaginatorInterface;

/**
 * Class ArticleService.
 */
class ArticleService implements ArticleServiceInterface
{
    /**
     * Items per page.
     *
     * Use constants to define configuration options that rarely change instead
     * of specifying them in app/config/config.yml.
     * See https://symfony.com/doc/current/best_practices.html#configuration
     *
     * @constant int
     */
    private const PAGINATOR_ITEMS_PER_PAGE = 10;

    /**
     * @param int $page Page number
     *
     * @return PaginatorInterface<string, mixed> Paginated list
     */
    public function getPaginateList(int $page): void
    {
    }
}