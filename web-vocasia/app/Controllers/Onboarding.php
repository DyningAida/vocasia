<?php

namespace App\Controllers;

class Onboarding extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Experience'
        ];
        return view('onboarding/experience', $data);
    }
    public function video_content()
    {
        $data = [
            'title' => 'Video-content'
        ];
        return view('onboarding/video_content', $data);
    }
    public function participant()
    {
        $data = [
            'title' => 'Participant'
        ];
        return view('onboarding/participant', $data);
    }
    public function personal_information()
    {
        $data = [
            'title' => 'Personal Information'
        ];
        return view('onboarding/personal_information', $data);
    }
    public function success()
    {
        $data = [
            'title' => 'Registered Success'
        ];
        return view('onboarding/success', $data);
    }
}
