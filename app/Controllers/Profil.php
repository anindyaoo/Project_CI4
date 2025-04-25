<?php

namespace App\Controllers;

class Profil extends BaseController
{
    public function home(): string
    {
        return view('profil_view/home');
    }

    public function pemweb(): string
    {
        return view('profil_view/pemweb');
    }

    public function mbd(): string
    {
        return view('profil_view/mbd');
    }

    public function mjk(): string
    {
        return view('profil_view/mjk');
    }

    public function mpsi(): string
    {
        return view('profil_view/mpsi');
    }

    public function rpl(): string
    {
        return view('profil_view/rpl');
    }
}