<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/form_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    public function monoplaza()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/form_view');
        echo view('front/monoplaza');
        echo view('front/footer_view');
    }

    public function pilotos()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/form_view');
        echo view('front/pilotos');
        echo view('front/footer_view');
    }

    public function contacto()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/form_view');
        echo view('front/contacto');
        echo view('front/footer_view');
    }
}
