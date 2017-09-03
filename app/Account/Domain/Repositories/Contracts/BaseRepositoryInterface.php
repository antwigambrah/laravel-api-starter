<?php

namespace App\Account\Domain\Repositories\Contracts;


Interface  BaseRepositoryInterface
{

    /**
     * Create a new resource
     *
     * @param array $resource
     * @return mixed
     */
    public function create(array $resource);
}