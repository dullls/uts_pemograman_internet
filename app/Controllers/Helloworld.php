<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Helloworld extends Controller
{
    public function index()
    {
        echo 'Hello World!';
    }
    public function medan()
    {
        echo 'I am from medan';
    }
    public function kota($kota)
    {
        echo 'I am from ' . $kota;
    }
}
