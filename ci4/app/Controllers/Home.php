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
		return view('errors/404', $data);
	}

	public function index()
	{
		if (session('login')) {
			return redirect()->to('/auth/dashboard');
		} else {
			$url 		= "http://sukmasantri.jombangkab.go.id/api";
			$json 		= file_get_contents($url);
			$json_data 	= json_decode($json, true);
			
			$data = [
				'title' 		=> 'index',
				'ikm'			=> $json_data
			];
			
			return view('index', $data);
		}
	}

	// public function index()
	// {
	// 	return view('welcome_message');
	// }

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
				
				$data_url = [
					'url_1' => NULL,
				];

				$data_pnl = [
					'pnl_1' => NULL,
				];

				$this->url->insert($data_url);
				$last_url = $this->url->insertID();
				$this->pnl->insert($data_pnl);
				$last_pnl = $this->pnl->insertID();

                $simpandata = [
                    'survey_ip'             => $ip,
                    'survey_layanan'        => $layanan,
					'survey_url' 			=> intval($last_url),
					'survey_pnl' 			=> intval($last_pnl),
                    'survey_status'         => 0,
                    'survey_dt'      		=> $dt,
                ];

                $this->survey->insert($simpandata);

				$last_survey = $this->survey->insertID();

				$simpan_session = [
					'survey'	=> true,
					'ip' 		=> $ip,
					'layanan' 	=> $layanan,
					'sid' 		=> $last_survey,
					'url_id'    => $last_url,
					'pnl_id'    => $last_pnl,
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
		// $cekip 		= $this->survey->cekip($ip);
		if (session('survey')) {
			// $ip 			= session()->get('ip');
			$survey_id 		= session()->get('sid');
			$url_id 		= session()->get('url_id');
			$pnl_id 		= session()->get('pnl_id');

			$layanan_id 	= session()->get('layanan');
			$url 			= "http://sukmasantri.jombangkab.go.id/api";
			$json 			= file_get_contents($url);
			$json_data 		= json_decode($json);
			foreach ($json_data as $item) {
				if ($item->id_lembaga == $layanan_id) {
				  $layanan = $item->nama_lembaga;
				  $ikm	   = $item->nilai_ikm;
				}
			  }

			$data = [
			'title' 		=> 'Survey',
			'survey_id'		=> $survey_id,
			'layanan'		=> $layanan,
			'ikm'			=> $ikm,
			'id_lembaga'	=> $layanan_id,
			'url_id' 		=> $url_id,
			'pnl_id' 		=> $pnl_id,
			];

			return view('survey', $data);

		} else {
			return redirect()->to('/home/not_found');
		}
		
	}

	public function save2nd()
	{
			$survey_id  	= $this->request->getVar('survey_id');
			$id_lembaga 	= $this->request->getVar('id_lembaga');
			$nama_lembaga  	= $this->request->getVar('nama_lembaga');
			$ikm  			= $this->request->getVar('ikm');
			$url_id  		= $this->request->getVar('url_id');
			$pnl_id  		= $this->request->getVar('pnl_id');

			$p1_1       = intval($this->request->getPost('p1_1'));
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
			$p1_14       = intval($this->request->getPost('p1_14'));
			$p1_15       = intval($this->request->getPost('p1_15'));
			$p1_16       = intval($this->request->getPost('p1_16'));
			$p1_17       = intval($this->request->getPost('p1_17'));
			$p1_18       = intval($this->request->getPost('p1_18'));
			$p1_19       = intval($this->request->getPost('p1_19'));
			$p1_20       = intval($this->request->getPost('p1_20'));
			$p1_21       = intval($this->request->getPost('p1_21'));
			$p1_22       = intval($this->request->getPost('p1_22'));
			$p1_23       = intval($this->request->getPost('p1_23'));
			$p1_24       = intval($this->request->getPost('p1_24'));
			$p1_25       = intval($this->request->getPost('p1_25'));
			$p1_26       = intval($this->request->getPost('p1_26'));
			$p1_27       = intval($this->request->getPost('p1_27'));
			$p1_28       = intval($this->request->getPost('p1_28'));
			$p1_29       = intval($this->request->getPost('p1_29'));
			$p1_30       = intval($this->request->getPost('p1_30'));
			$p1_31       = intval($this->request->getPost('p1_31'));
			$p1_32       = intval($this->request->getPost('p1_32'));
			$p1_33       = intval($this->request->getPost('p1_33'));
			$p1_34       = intval($this->request->getPost('p1_34'));
			$p1_35       = intval($this->request->getPost('p1_35'));
			$p1_36       = intval($this->request->getPost('p1_36'));
			$p1_37       = intval($this->request->getPost('p1_37'));

			// if (isset($p1_1, $p1_2, $p1_3, $p1_4, $p1_5, $p1_6, $p1_7, $p1_8, $p1_9, $p1_10, $p1_11, $p1_12, $p1_13,)) {
			// 	# code...
			// } else {
			// 	# code...
			// }

			//I 1-13
			$ni_1		= $p1_1 * 0.089;
			$ni_2		= $p1_2 * 0.089;
			$ni_3		= $p1_3 * 0.071;
			$ni_4		= $p1_4 * 0.071;
			$ni_5		= $p1_5 * 0.071;
			$ni_6		= $p1_6 * 0.071;
			$ni_7		= $p1_7 * 0.071;
			$ni_8		= $p1_8 * 0.071;
			$ni_9		= $p1_9 * 0.089;
			$ni_10		= $p1_10 * 0.089;
			$ni_11		= $p1_11 * 0.071;
			$ni_12		= $p1_12 * 0.071;
			$ni_13		= $p1_13 * 0.071;
			//---------------------------- +
			$nt_i		= $ni_1 + $ni_2 + $ni_3 + $ni_4 + $ni_5 + $ni_6 + $ni_7 + $ni_8 + $ni_9 + $ni_10 + $ni_11 + $ni_12 + $ni_13;
			$np_i		= $nt_i * 0.3;

			//II 14 - 20
			$ni_14		= $p1_14 * 0.136;
			$ni_15		= $p1_15 * 0.136;
			$ni_16		= $p1_16 * 0.091;
			$ni_17		= $p1_17 * 0.136;
			$ni_18		= $p1_18 * 0.182;
			$ni_19		= $p1_19 * 0.136;
			$ni_20		= $p1_20 * 0.182;
			//---------------------------- +
			$nt_ii		= $ni_14 + $ni_15 + $ni_16 + $ni_17 + $ni_18 + $ni_19 + $ni_20;
			$np_ii		= $nt_ii * 0.18;

			//III 21 - 27
			$ni_21		= $p1_21 * 0.133;
			$ni_22		= $p1_22 * 0.133;
			$ni_23		= $p1_23 * 0.133;
			$ni_24		= $p1_24 * 0.2;
			$ni_25		= $p1_25 * 0.2;
			$ni_26		= $p1_26 * 0.067;
			$ni_27		= $p1_27 * 0.133;
			//---------------------------- +
			$nt_iii		= $ni_21 + $ni_22 + $ni_23 + $ni_24 + $ni_25 + $ni_26 + $ni_27;
			$np_iii		= $nt_iii * 0.15;
			
			//IV 28 - 32
			$ni_28		= $p1_28 * 0.2;
			$ni_29		= $p1_29 * 0.25;
			$ni_30		= $p1_30 * 0.25;
			$ni_31		= $p1_31 * 0.15;
			$ni_32		= $p1_32 * 0.15;
			//-------------------------- +
			$nt_iv		= $ni_28 + $ni_29 + $ni_30 + $ni_31 + $ni_32;
			$np_iv		= $nt_iv * 0.15;

			//V 33-36
			$ni_33		= $p1_33 * 0.2;
			$ni_34		= $p1_34 * 0.2;
			$ni_35		= $p1_35 * 0.3;
			$ni_36		= $p1_36 * 0.3;
			//------------------------- +
			$nt_v 		= $ni_33 + $ni_34 + $ni_35 + $ni_36;
			$np_v 		= $nt_v * 0.15;

			//VI 37
			$ni_37		= $p1_37;
			$np_vi 		= $ni_37 * 0.07;

			$nilai_ipp  = $np_i + $np_ii + $np_iii + $np_iv + $np_v + $np_vi;

			if ((0 <= $nilai_ipp) && ($nilai_ipp <= 1.00)) {
				$ipp 		= "Gagal";
				$ipp_mutu	= "F";
			} elseif ((1.01 <= $nilai_ipp) && ($nilai_ipp <= 1.50)) {
				$ipp 		= "Sangat Buruk";
				$ipp_mutu	= "E";
			} elseif ((1.51 <= $nilai_ipp) && ($nilai_ipp <= 2.00)) {
				$ipp 		= "Buruk";
				$ipp_mutu	= "D";
			} elseif ((2.01 <= $nilai_ipp) && ($nilai_ipp <= 2.50)) {
				$ipp 		= "Cukup (Dengan Catatan)";
				$ipp_mutu	= "C-";
			} elseif ((2.51 <= $nilai_ipp) && ($nilai_ipp <= 3.00)) {
				$ipp 		= "Cukup";
				$ipp_mutu	= "C";
			} elseif ((3.01 <= $nilai_ipp) && ($nilai_ipp <= 3.50)) {
				$ipp 		= "Baik (Dengan Catatan)";
				$ipp_mutu	= "B-";
			} elseif ((3.51 <= $nilai_ipp) && ($nilai_ipp <= 4.00)) {
				$ipp 		= "Baik";
				$ipp_mutu	= "B";
			} elseif ((4.01 <= $nilai_ipp) && ($nilai_ipp <= 4.50)) {
				$ipp 		= "Sangat Baik";
				$ipp_mutu	= "A-";
			} elseif ((4.51 <= $nilai_ipp) && ($nilai_ipp <= 5.00)) {
				$ipp 		= "Pelayanan Prima";
				$ipp_mutu	= "A";
			}

			//Nilai konversi aslinya 1.25
			$nilai_ikpp = (1.25 * ($ikm / 25)) + $nilai_ipp;

			if ((1.25 <= $nilai_ikpp) && ($nilai_ikpp <= 3.00)) {
				$ikpp 		= "Buruk";
				$ikpp_mutu	= "D";
			} elseif ((3.01 <= $nilai_ikpp) && ($nilai_ikpp <= 6.50)) {
				$ikpp 		= "Cukup";
				$ikpp_mutu	= "C";
			} elseif ((6.51 <= $nilai_ikpp) && ($nilai_ikpp <= 8.25)) {
				$ikpp 		= "Berkualitas";
				$ikpp_mutu	= "B";
			} elseif ((8.26 <= $nilai_ikpp) && ($nilai_ikpp <= 10)) {
				$ikpp 		= "Sangat Berkualitas";
				$ikpp_mutu	= "A";
			}
			//var_dump($ikpp);
			

			$update = [
				'survey_layanan_nama'=> $nama_lembaga,
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
				'p1_14'             => $p1_14,
				'p1_15'             => $p1_15,
				'p1_16'             => $p1_16,
				'p1_17'             => $p1_17,
				'p1_18'             => $p1_18,
				'p1_19'             => $p1_19,
				'p1_20'             => $p1_20,
				'p1_21'             => $p1_21,
				'p1_22'             => $p1_22,
				'p1_23'             => $p1_23,
				'p1_24'             => $p1_24,
				'p1_25'             => $p1_25,
				'p1_26'             => $p1_26,
				'p1_27'             => $p1_27,
				'p1_28'             => $p1_28,
				'p1_29'             => $p1_29,
				'p1_30'             => $p1_30,
				'p1_31'             => $p1_31,
				'p1_32'             => $p1_32,
				'p1_33'             => $p1_33,
				'p1_34'             => $p1_34,
				'p1_35'             => $p1_35,
				'p1_36'             => $p1_36,
				'p1_37'             => $p1_37,
			];

			$this->survey->update($survey_id, $update);
			$this->url_pnl($url_id, $pnl_id);

			$cek_id_lembaga = $this->ikpp->cek_id_lembaga($id_lembaga);
			if ($cek_id_lembaga == 0) {
				$data_ikpp = [
					'id_lembaga'		=> $id_lembaga,
					'nama_lembaga'		=> $nama_lembaga,
					'nilai_ikm'			=> $ikm,
					'nilai_ipp'			=> $nilai_ipp,
					'ipp'				=> $ipp,
					'ipp_mutu'			=> $ipp_mutu,
					'nilai_ikpp'		=> $nilai_ikpp,
					'ikpp'				=> $ikpp,
					'ikpp_mutu'			=> $ikpp_mutu,
					'dt'				=> date("Y-m-d H:i:s"),
					'survey_id'			=> $survey_id,
					'ni_1'				=> $ni_1,
					'ni_2'				=> $ni_2,
					'ni_3'				=> $ni_3,
					'ni_4'				=> $ni_4,
					'ni_5'				=> $ni_5,
					'ni_6'				=> $ni_6,
					'ni_7'				=> $ni_7,
					'ni_8'				=> $ni_8,
					'ni_9'				=> $ni_9,
					'ni_10'				=> $ni_10,
					'ni_11'				=> $ni_11,
					'ni_12'				=> $ni_12,
					'ni_13'				=> $ni_13,
					'ni_14'				=> $ni_14,
					'ni_15'				=> $ni_15,
					'ni_16'				=> $ni_16,
					'ni_17'				=> $ni_17,
					'ni_18'				=> $ni_18,
					'ni_19'				=> $ni_19,
					'ni_20'				=> $ni_20,
					'ni_21'				=> $ni_21,
					'ni_22'				=> $ni_22,
					'ni_23'				=> $ni_23,
					'ni_24'				=> $ni_24,
					'ni_25'				=> $ni_25,
					'ni_26'				=> $ni_26,
					'ni_27'				=> $ni_27,
					'ni_28'				=> $ni_28,
					'ni_29'				=> $ni_29,
					'ni_30'				=> $ni_30,
					'ni_31'				=> $ni_31,
					'ni_32'				=> $ni_32,
					'ni_33'				=> $ni_33,
					'ni_34'				=> $ni_34,
					'ni_35'				=> $ni_35,
					'ni_36'				=> $ni_36,
					'ni_37'				=> $ni_37,
					'nt_i'				=> $nt_i,
					'np_i'				=> $np_i,
					'nt_ii'				=> $nt_ii,
					'np_ii'				=> $np_ii,
					'nt_iii'			=> $nt_iii,
					'np_iii'			=> $np_iii,
					'nt_iv'				=> $nt_iv,
					'np_iv'				=> $np_iv,
					'nt_v'				=> $nt_v,
					'np_v'				=> $np_v,
					'np_vi'				=> $np_vi,
				];
				$this->ikpp->insert($data_ikpp);
			} else {
				$data_ikpp = [
					'nilai_ikm'			=> $ikm,
					'nilai_ipp'			=> $nilai_ipp,
					'ipp'				=> $ipp,
					'ipp_mutu'			=> $ipp_mutu,
					'nilai_ikpp'		=> $nilai_ikpp,
					'ikpp'				=> $ikpp,
					'ikpp_mutu'			=> $ikpp_mutu,
					'dt'				=> date("Y-m-d H:i:s"),
					'survey_id'			=> $survey_id,
					'ni_1'				=> $ni_1,
					'ni_2'				=> $ni_2,
					'ni_3'				=> $ni_3,
					'ni_4'				=> $ni_4,
					'ni_5'				=> $ni_5,
					'ni_6'				=> $ni_6,
					'ni_7'				=> $ni_7,
					'ni_8'				=> $ni_8,
					'ni_9'				=> $ni_9,
					'ni_10'				=> $ni_10,
					'ni_11'				=> $ni_11,
					'ni_12'				=> $ni_12,
					'ni_13'				=> $ni_13,
					'ni_14'				=> $ni_14,
					'ni_15'				=> $ni_15,
					'ni_16'				=> $ni_16,
					'ni_17'				=> $ni_17,
					'ni_18'				=> $ni_18,
					'ni_19'				=> $ni_19,
					'ni_20'				=> $ni_20,
					'ni_21'				=> $ni_21,
					'ni_22'				=> $ni_22,
					'ni_23'				=> $ni_23,
					'ni_24'				=> $ni_24,
					'ni_25'				=> $ni_25,
					'ni_26'				=> $ni_26,
					'ni_27'				=> $ni_27,
					'ni_28'				=> $ni_28,
					'ni_29'				=> $ni_29,
					'ni_30'				=> $ni_30,
					'ni_31'				=> $ni_31,
					'ni_32'				=> $ni_32,
					'ni_33'				=> $ni_33,
					'ni_34'				=> $ni_34,
					'ni_35'				=> $ni_35,
					'ni_36'				=> $ni_36,
					'ni_37'				=> $ni_37,
					'nt_i'				=> $nt_i,
					'np_i'				=> $np_i,
					'nt_ii'				=> $nt_ii,
					'np_ii'				=> $np_ii,
					'nt_iii'			=> $nt_iii,
					'np_iii'			=> $np_iii,
					'nt_iv'				=> $nt_iv,
					'np_iv'				=> $np_iv,
					'nt_v'				=> $nt_v,
					'np_v'				=> $np_v,
					'np_vi'				=> $np_vi,
				];

				$get_id_ikpp = $this->ikpp->select_id_ikpp($id_lembaga);
				$id_ikpp 	 = $get_id_ikpp->id_ikpp;

				$this->ikpp->update($id_ikpp, $data_ikpp);
			}
			
			return redirect()->to('success');
	}

	public function url_pnl($url_id, $pnl_id)
	{
		$url_1       = $this->request->getPost('url_1');
		$url_2       = $this->request->getPost('url_2');
		$url_3       = $this->request->getPost('url_3');
		$url_4       = $this->request->getPost('url_4');
		$url_5       = $this->request->getPost('url_5');
		$url_6       = $this->request->getPost('url_6');
		$url_7       = $this->request->getPost('url_7');
		$url_8       = $this->request->getPost('url_8');
		$url_9       = $this->request->getPost('url_9');
		$url_10       = $this->request->getPost('url_10');
		$url_11       = $this->request->getPost('url_11');
		$url_12       = $this->request->getPost('url_12');
		$url_13       = $this->request->getPost('url_13');
		$url_14       = $this->request->getPost('url_14');
		$url_15       = $this->request->getPost('url_15');
		$url_16       = $this->request->getPost('url_16');
		$url_17       = $this->request->getPost('url_17');
		$url_18       = $this->request->getPost('url_18');
		$url_19       = $this->request->getPost('url_19');
		$url_20       = $this->request->getPost('url_20');
		$url_21       = $this->request->getPost('url_21');
		$url_22       = $this->request->getPost('url_22');
		$url_23       = $this->request->getPost('url_23');
		$url_24       = $this->request->getPost('url_24');
		$url_25       = $this->request->getPost('url_25');
		$url_26       = $this->request->getPost('url_26');
		$url_27       = $this->request->getPost('url_27');
		$url_28       = $this->request->getPost('url_28');
		$url_29       = $this->request->getPost('url_29');
		$url_30       = $this->request->getPost('url_30');
		$url_31       = $this->request->getPost('url_31');
		$url_32       = $this->request->getPost('url_32');
		$url_33       = $this->request->getPost('url_33');
		$url_34       = $this->request->getPost('url_34');
		$url_35       = $this->request->getPost('url_35');
		$url_36       = $this->request->getPost('url_36');
		$url_37       = $this->request->getPost('url_37');

		$data_url = [
			'url_1'				=> $url_1,
			'url_2'				=> $url_2,
			'url_3'				=> $url_3,
			'url_4'				=> $url_4,
			'url_5'				=> $url_5,
			'url_6'				=> $url_6,
			'url_7'				=> $url_7,
			'url_8'				=> $url_8,
			'url_9'				=> $url_9,
			'url_10'			=> $url_10,
			'url_11'			=> $url_11,
			'url_12'			=> $url_12,
			'url_13'			=> $url_13,
			'url_14'			=> $url_14,
			'url_15'			=> $url_15,
			'url_16'			=> $url_16,
			'url_17'			=> $url_17,
			'url_18'			=> $url_18,
			'url_19'			=> $url_19,
			'url_20'			=> $url_20,
			'url_21'			=> $url_21,
			'url_22'			=> $url_22,
			'url_23'			=> $url_23,
			'url_24'			=> $url_24,
			'url_25'			=> $url_25,
			'url_26'			=> $url_26,
			'url_27'			=> $url_27,
			'url_28'			=> $url_28,
			'url_29'			=> $url_29,
			'url_30'			=> $url_30,
			'url_31'			=> $url_31,
			'url_32'			=> $url_32,
			'url_33'			=> $url_33,
			'url_34'			=> $url_34,
			'url_35'			=> $url_35,
			'url_36'			=> $url_36,
			'url_37'			=> $url_37,
		];
		$this->url->update($url_id, $data_url);

		$pnl_1       = $this->request->getPost('pnl_1');
		$pnl_2       = $this->request->getPost('pnl_2');
		$pnl_3       = $this->request->getPost('pnl_3');
		$pnl_4       = $this->request->getPost('pnl_4');
		$pnl_5       = $this->request->getPost('pnl_5');
		$pnl_6       = $this->request->getPost('pnl_6');
		$pnl_7       = $this->request->getPost('pnl_7');
		$pnl_8       = $this->request->getPost('pnl_8');
		$pnl_9       = $this->request->getPost('pnl_9');
		$pnl_10       = $this->request->getPost('pnl_10');
		$pnl_11       = $this->request->getPost('pnl_11');
		$pnl_12       = $this->request->getPost('pnl_12');
		$pnl_13       = $this->request->getPost('pnl_13');
		$pnl_14       = $this->request->getPost('pnl_14');
		$pnl_15       = $this->request->getPost('pnl_15');
		$pnl_16       = $this->request->getPost('pnl_16');
		$pnl_17       = $this->request->getPost('pnl_17');
		$pnl_18       = $this->request->getPost('pnl_18');
		$pnl_19       = $this->request->getPost('pnl_19');
		$pnl_20       = $this->request->getPost('pnl_20');
		$pnl_21       = $this->request->getPost('pnl_21');
		$pnl_22       = $this->request->getPost('pnl_22');
		$pnl_23       = $this->request->getPost('pnl_23');
		$pnl_24       = $this->request->getPost('pnl_24');
		$pnl_25       = $this->request->getPost('pnl_25');
		$pnl_26       = $this->request->getPost('pnl_26');
		$pnl_27       = $this->request->getPost('pnl_27');
		$pnl_28       = $this->request->getPost('pnl_28');
		$pnl_29       = $this->request->getPost('pnl_29');
		$pnl_30       = $this->request->getPost('pnl_30');
		$pnl_31       = $this->request->getPost('pnl_31');
		$pnl_32       = $this->request->getPost('pnl_32');
		$pnl_33       = $this->request->getPost('pnl_33');
		$pnl_34       = $this->request->getPost('pnl_34');
		$pnl_35       = $this->request->getPost('pnl_35');
		$pnl_36       = $this->request->getPost('pnl_36');
		$pnl_37       = $this->request->getPost('pnl_37');

		$data_pnl = [
			'pnl_1'				=> $pnl_1,
			'pnl_2'				=> $pnl_2,
			'pnl_3'				=> $pnl_3,
			'pnl_4'				=> $pnl_4,
			'pnl_5'				=> $pnl_5,
			'pnl_6'				=> $pnl_6,
			'pnl_7'				=> $pnl_7,
			'pnl_8'				=> $pnl_8,
			'pnl_9'				=> $pnl_9,
			'pnl_10'			=> $pnl_10,
			'pnl_11'			=> $pnl_11,
			'pnl_12'			=> $pnl_12,
			'pnl_13'			=> $pnl_13,
			'pnl_14'			=> $pnl_14,
			'pnl_15'			=> $pnl_15,
			'pnl_16'			=> $pnl_16,
			'pnl_17'			=> $pnl_17,
			'pnl_18'			=> $pnl_18,
			'pnl_19'			=> $pnl_19,
			'pnl_20'			=> $pnl_20,
			'pnl_21'			=> $pnl_21,
			'pnl_22'			=> $pnl_22,
			'pnl_23'			=> $pnl_23,
			'pnl_24'			=> $pnl_24,
			'pnl_25'			=> $pnl_25,
			'pnl_26'			=> $pnl_26,
			'pnl_27'			=> $pnl_27,
			'pnl_28'			=> $pnl_28,
			'pnl_29'			=> $pnl_29,
			'pnl_30'			=> $pnl_30,
			'pnl_31'			=> $pnl_31,
			'pnl_32'			=> $pnl_32,
			'pnl_33'			=> $pnl_33,
			'pnl_34'			=> $pnl_34,
			'pnl_35'			=> $pnl_35,
			'pnl_36'			=> $pnl_36,
			'pnl_37'			=> $pnl_37,
		];
		$this->pnl->update($pnl_id, $data_pnl);
	}

	public function success()
	{
		$data = [
			'title' 		=> 'Success',
		];
		
		return view('success', $data);
	}

	public function back_layanan()
    {
        if ($this->request->isAJAX()) {

			$survey_id 		= session()->get('sid');
			$this->survey->delete($survey_id );

            $this->session->destroy();

            $data = [
                'respond'   => 'success',
                'message'   => 'Berhasil!'
            ];

            echo json_encode($data);
        }
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
