<?php


namespace App;


use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class ResolvePaginate
{
    private $items;
    private $perPage;
    private $page;
    private $options;

    public function __construct($items, $perPage = 5, $page = null, $options = [])
    {
        $this->items = $items;
        $this->perPage = $perPage;
        $this->page = $page;
        $this->options = $options;
    }

    public function paginate()
    {
        $page = $this->page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $this->items instanceof Collection ? $this->items : Collection::make($this->items);
        return new LengthAwarePaginator($items->forPage($page, $this->perPage)->values(), $items->count(), (int) $this->perPage, $page, $this->options);
    }
}
