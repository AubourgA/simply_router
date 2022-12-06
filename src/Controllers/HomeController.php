<?php

namespace App\Controllers;

use App\Controllers\AbstractController;

class HomeController extends AbstractController
{

  
    public function index()
    {
       
      return $this->render('home', []);
    }



}