<?php

namespace App\Routing;

use Exception;

class RouteNotFoundException extends Exception
{

        public function __construct()
        {
            $this->message = "Erreur 404 - Impossible de trouver la route";
        }
}