<?php

namespace App\Controllers\Instructor;

use App\Controllers\BaseController;
// namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Courses'
        ];
        return view('dashboard/instructor/courses', $data);
    }
    public function course_none()
    {
        $data = [
            'title' => 'None Course in Courses list'
        ];
        return view('dashboard/instructor/course_none', $data);
    }
    public function add_course()
    {
        $data = [
            'title' => 'Tambah Course'
        ];
        return view('dashboard/instructor/add_course', $data);
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
