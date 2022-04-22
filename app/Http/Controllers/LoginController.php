<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Login Controller
     * Method untuk menjalankan halaman autentikasi
     * 
     * @author Dasa Kreativa Group
     * @since 1.0.0-dev.20220422
     * @package sidesa
     */
    public function index()
    {
        $data['title'] = "Masuk Dahulu";
        return view('login', $data);
    }
}
