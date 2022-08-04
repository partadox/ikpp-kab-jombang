<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function not_found()
	{
		$this->cachePage(360);
		

		$data = [
			'title' 		=> '404',
		];
		return view('halaman/404', $data);
	}

	public function index()
	{

		$data = [
			'title' 		=> 'index',
		];
		
		return view('index', $data);
	}

	public function save1st()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'survey_layanan' => [
                    'label' => 'Layanan',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Harus Dipilih!',
                    ]
                ]
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'survey_layanan'    => $validation->getError('survey_layanan'),
                    ]
                ];
            } else {

                //Get Datetime now
                $dt        = date("Y-m-d H:i:s");

				//Get IP
				if (!empty($_SERVER['HTTP_CLIENT_IP']))   //Checking IP From Shared Internet
				{
					$ip = $_SERVER['HTTP_CLIENT_IP'];
				}
				elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //To Check IP is Pass From Proxy
				{
					$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
				}
				else
				{
					$ip = $_SERVER['REMOTE_ADDR'];
				}

				$layanan = $this->request->getVar('survey_layanan');

                $simpandata = [
                    'survey_ip'             => $ip,
                    'survey_layanan'        => $layanan,
                    'survey_status'         => 0,
                    'survey_dt'      		=> $dt,
                ];

                $this->survey->insert($simpandata);

				$last_survey = $this->survey->insertID();

				$simpan_session = [
					'ip' => $ip,
					'layanan' => $layanan,
					'sid' => $last_survey,
				];

				$this->session->set($simpan_session);

                $msg = [
					'sukses' => [
						'link' => 'survey'
					]
				];
            }
            echo json_encode($msg);
        }
    }

	public function survey()
	{
		$ip 		= session()->get('ip');
		$cekip 		= $this->survey->cekip($ip);
		if ($cekip == 1) {

			$layanan 		= session()->get('layanan');
			$data = [
			'title' 		=> 'survey',
			'layanan'		=> $layanan 
			];
			return view('survey', $data);

		} else {
			return view('index');
		}
		
	}

	public function save2nd()
	{
			$survey_id 		= session()->get('sid');

			$p1_1       = intval($this->request->getPost('p1_1')) ;
			$p1_2       = intval($this->request->getPost('p1_2'));
			$p1_3       = intval($this->request->getPost('p1_3'));
			$p1_4       = intval($this->request->getPost('p1_4'));
			$p1_5       = intval($this->request->getPost('p1_5'));
			$p1_6       = intval($this->request->getPost('p1_6'));
			$p1_7       = intval($this->request->getPost('p1_7'));
			$p1_8       = intval($this->request->getPost('p1_8'));
			$p1_9       = intval($this->request->getPost('p1_9'));
			$p1_10       = intval($this->request->getPost('p1_10'));
			$p1_11       = intval($this->request->getPost('p1_11'));
			$p1_12       = intval($this->request->getPost('p1_12'));
			$p1_13       = intval($this->request->getPost('p1_13'));

			// if (isset($p1_1, $p1_2, $p1_3, $p1_4, $p1_5, $p1_6, $p1_7, $p1_8, $p1_9, $p1_10, $p1_11, $p1_12, $p1_13,)) {
			// 	# code...
			// } else {
			// 	# code...
			// }
			

			$update = [
				'survey_status'	   => 1,
				'p1_1'             => $p1_1,
				'p1_2'             => $p1_2,
				'p1_3'             => $p1_3,
				'p1_4'             => $p1_4,
				'p1_5'             => $p1_5,
				'p1_6'             => $p1_6,
				'p1_7'             => $p1_7,
				'p1_8'             => $p1_8,
				'p1_9'             => $p1_9,
				'p1_10'             => $p1_10,
				'p1_11'             => $p1_11,
				'p1_12'             => $p1_12,
				'p1_13'             => $p1_13,
			];

			$this->survey->update($survey_id, $update);
			return redirect()->to('/success');
	}

	public function success()
	{
		$layanan 		= session()->get('layanan');
		$data = [
			'title' 		=> 'Success',
			'layanan'		=> $layanan 
		];
		
		return view('success', $data);
	}

	public function try()
    {
        if ($this->request->isAJAX()) {

            $this->session->destroy();

            $data = [
                'respond'   => 'success',
                'message'   => 'Berhasil!'
            ];

            echo json_encode($data);
        }
    }

}
