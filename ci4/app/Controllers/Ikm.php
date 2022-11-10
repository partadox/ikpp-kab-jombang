<?php

namespace App\Controllers;

use Config\Services;

class Ikm extends BaseController
{

    public function index()
    {
        if (!session()->get('user_id')) {
            return redirect()->to('home/not_found');
        } else {
            $data = [
                'title' => 'Halaman IKM'
            ];
            return view('auth/ikm/index', $data);
        }
    }

    public function getdata()
    {
        if ($this->request->isAJAX()) {
            $url 		= "http://sukmasantri.jombangkab.go.id/api";
            // $json 		= file_get_contents($url);
            $options = array(
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_USERAGENT => 'any-user-agent-you-want',
			);
			
			// Preparing CURL
			$curl_handle = curl_init($url);
			
			// Setting array of options
			curl_setopt_array( $curl_handle, $options );
			
			// Getting the content
			$json 		= curl_exec($curl_handle);
		    $list 	    = json_decode($json, true);
            $data = [
                'title' => 'IKM',
                'url'   => $url,
                'list'  => $list


            ];
            $msg = [
                'data' => view('auth/ikm/list', $data)
            ];
            echo json_encode($msg);
        }
    }

}
