<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Vocasia',
            'tes' => ['satu, dua, tiga']
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Me | Vocasia'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact | Vocasia',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jalan Kolonel Sugiono No. 16A',
                    'kota' => 'Purwodadi',
                    'email' => 'sentosajaya@sj.com',
                    'no_telp' => '082383783473'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'Jalan R. Suprapto No. 182',
                    'kota' => 'Purwodadi',
                    'email' => 'sentosajaya2@sj.com',
                    'no_telp' => '08973847829'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
