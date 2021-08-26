<?php

namespace App\Controllers;

class Pengajar extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Experience'
        ];
        return view('pengajar/experience', $data);
    }
    public function video_content()
    {
        $data = [
            'title' => 'Video-content'
        ];
        return view('pengajar/video_content', $data);
    }
    public function participant()
    {
        $data = [
            'title' => 'Participant'
        ];
        return view('pengajar/participant', $data);
    }
    public function personal_information()
    {
        $data = [
            'title' => 'Personal Information'
        ];
        return view('pengajar/personal_information', $data);
    }
    public function success()
    {
        $data = [
            'title' => 'Registered Success'
        ];
        return view('pengajar/success', $data);
    }
}
