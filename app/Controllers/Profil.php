<?php

namespace App\Controllers;

use App\Models\mk_db;

class Profil extends BaseController
{
    public function __construct()
    {
        helper('url'); // Sekali load untuk seluruh method
    }
    public function home(): string
    {
        $courseModel = new mk_db();
        $data['courses'] = $courseModel->findAll(); //buat nampilin model
        return view('profil_view/home', $data);
    }
    public function matkul($id): string
    {
        $courseModel = new mk_db();
        $data['courses'] = $courseModel->findAll();
        $data['matkul'] = $courseModel->find($id); // <- ini penting

        if (!is_numeric($id)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("ID matkul tidak valid.");
        }
        return view('profil_view/matkul', $data); // <- ini juga
    }
}