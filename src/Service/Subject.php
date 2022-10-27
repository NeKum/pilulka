<?php

declare(strict_types=1);

namespace App\Service;

abstract class Subject
{
    protected const QUERY = '';
    protected const LIMIT = 100;

    public function __construct(
        protected readonly Twitter $twitter
    ) {
    }

    public function getPosts(): array
    {
        return $this->twitter->getPosts($this::QUERY, $this::LIMIT);
    }
}