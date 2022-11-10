<?php

namespace App\Controllers;

class cvdafha extends BaseController
{
    public function Home()
    {
        echo view('heder');
        echo view('biodata');
        echo view ('footer');
    }
}
