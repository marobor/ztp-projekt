<?php
/**
 * Article service interface.
 */
namespace App\Service;

use Knp\Component\Pager\Event\PaginationEvent;
use Knp\Component\Pager\PaginatorInterface;

/**
 * Class ArticleService Repos
 */
interface ArticleServiceInterface
{


    /**
     * Get paginated list.
     *
     * @param int $page Page number
     *
     * @return PaginatorInterface<string, mixed> Paginated list
     */
    public function getPaginateList(int $page): void;
}