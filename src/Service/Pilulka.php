<?php

namespace App\Service;

class Pilulka
{
    private const QUERY = 'pilulka.cz OR #pilulkacz OR #pilulka';
    private const LIMIT = 100;

    public function __construct(
        private readonly Twitter $twitter
    ) {
    }

    public function getPosts(): array
    {
        return $this->twitter->getPosts(self::QUERY, self::LIMIT);
    }
}