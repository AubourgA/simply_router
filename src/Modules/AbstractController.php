<?php

namespace App\Modules;

abstract class AbstractController
{
    public function render(string $page, ?array $array ): string
    {
        
        return $page;
    }
}