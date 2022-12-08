<?php

namespace App\Controllers;

class Admin extends BaseController
{
  public function index()
  {
    echo view('templates/header');
    echo view('templates/sidebar');
    echo view('templates/topbar');
    echo view('dashboard/index');
    echo view('templates/footer');
  }
}
