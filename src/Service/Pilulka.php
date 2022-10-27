<?php

declare(strict_types=1);

namespace App\Service;

class Pilulka extends Subject
{
    protected const QUERY = 'pilulka.cz OR #pilulkacz OR #pilulka';
    protected const LIMIT = 100;
}