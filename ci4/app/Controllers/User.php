<?php

namespace App\Controllers;

use Config\Services;

class User extends BaseController
{

    public function index()
    {
        if (!session()->get('user_id')) {
            return redirect()->to('home/not_found');
        } else {
            $data = [
                'title' => 'Halaman User Management'
            ];
            return view('auth/user/index', $data);
        }
    }

    public function getdata()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'title' => 'IKM',
                'list'  => $this->user->list()


            ];
            $msg = [
                'data' => view('auth/user/list', $data)
            ];
            echo json_encode($msg);
        }
    }

}
