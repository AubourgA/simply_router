<?php


namespace App\Controllers;

use App\Controllers\AbstractController;

class ContactController extends AbstractController
{
    public function index()
    {
       $test = 4;
        return $this->render('contact', ['test' => $test]);
    }

    public function create(int $id)
    {
      
        $prix = $id *2;

       return $this->render('create', ['prix' => $prix ]);
    }
}