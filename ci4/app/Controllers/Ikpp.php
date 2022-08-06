<?php

namespace App\Controllers;

use Config\Services;

class Ikpp extends BaseController
{

    public function index()
    {
        if (!session()->get('user_id')) {
            return redirect()->to('home/not_found');
        } else {
            $data = [
                'title' => 'Halaman IKPP'
            ];
            return view('auth/ikpp/index', $data);
        }
    }

    public function getdata()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'title' => 'IKPP',
                'list' => $this->ikpp->list()


            ];
            $msg = [
                'data' => view('auth/ikpp/list', $data)
            ];
            echo json_encode($msg);
        }
    }

}
