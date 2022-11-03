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

    public function riwayat()
    {
        if (!session()->get('user_id')) {
            return redirect()->to('login');
        }

        $uri                = service('uri');
        $lembaga_id         = $uri->getSegment(4);
        if ($lembaga_id != NULL) {
           $data = [
                'title' => 'Riwayat Hasil Survey',
                'list' => $this->survey->list_riwayat($lembaga_id),
            ];
           return view('auth/ikpp/riwayat', $data);
        } else {
            $this->index();
        }

    }

    public function riwayat_detail()
    {
        if ($this->request->isAJAX()) {
            $survey_id  = $this->request->getVar('survey_id');
            $url_id     = $this->request->getVar('survey_url');
            $pnl_id     = $this->request->getVar('survey_pnl');
            $survey     = $this->survey->find($survey_id);
            $url        = $this->url->find($url_id);
            $pnl        = $this->pnl->find($pnl_id);

            $data = [
                'title'         => 'Hasil Survey ' . $survey['survey_dt'],
                'survey'        => $survey,
                'url'           => $url,
                'pnl'           => $pnl,
            ];

            $msg = [
                'sukses' => view('auth/ikpp/riwayat_detail', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function export_excel($id_ikpp)
    {
        // $uri       = service('uri');
        // $id_ikpp   = $uri->getSegment(3);
        if ($id_ikpp != NULL) {
            $list = $this->ikpp->find($id_ikpp);
            $id_survey = $list['survey_id'];
            $survey = $this->survey->find($id_survey);
            $url_id = $survey['survey_url']; 
            $pnl_id = $survey['survey_pnl'];
            $url    = $this->url->find($url_id);
            $pnl    = $this->pnl->find($pnl_id);
        } else{
            return redirect()->to('auth/dashboard');
        }

        $judul = "Penilaian Kinerja UPP - " . $list['nama_lembaga'];
        $tgl   = "Tanggal Download Laporan - " . date("d-m-Y");
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();

        $styleColumn = [
            'font' => [
                'bold' => true,
                'size' => 14,
            ],
            'alignment' => [
                'horizontal'    => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical'      => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ]
        ];

        $style_up = [
            'font' => [
                'bold' => true,
                'size' => 11,
            ],
            'alignment' => [
                'horizontal'    => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical'      => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => 'D9D9D9',
                ],
                'endColor' => [
                    'argb' => 'D9D9D9',
                ],
            ],        
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];

        $isi_tengah = [
            'alignment' => [
                'horizontal'    => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical'      => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];

        $isi_pinggir = [
            'alignment' => [
                'horizontal'    => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                'vertical'      => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];

        $sheet->setCellValue('A1', $judul);
        $sheet->mergeCells('A1:M1');
        $sheet->getStyle('A1')->applyFromArray($styleColumn);

        $sheet->setCellValue('A2', $tgl);
        $sheet->mergeCells('A2:M2');
        $sheet->getStyle('A2')->applyFromArray($styleColumn);

        $sheet->mergeCells('A5:A17');
        $sheet->mergeCells('A18:A24');
        $sheet->mergeCells('A25:A31');
        $sheet->mergeCells('A32:A36');
        $sheet->mergeCells('A37:A40');

        $sheet->mergeCells('G5:G17');
        $sheet->mergeCells('G18:G24');
        $sheet->mergeCells('G25:G31');
        $sheet->mergeCells('G32:G36');
        $sheet->mergeCells('G37:G40');

        $sheet->mergeCells('H5:H17');
        $sheet->mergeCells('H18:H24');
        $sheet->mergeCells('H25:H31');
        $sheet->mergeCells('H32:H36');
        $sheet->mergeCells('H37:H40');

        $sheet->mergeCells('I5:I17');
        $sheet->mergeCells('I18:I24');
        $sheet->mergeCells('I25:I31');
        $sheet->mergeCells('I32:I36');
        $sheet->mergeCells('I37:I40');

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A4', 'Bagian')
            ->setCellValue('B4', 'Indikator')
            ->setCellValue('C4', 'Bukti URL')
            ->setCellValue('D4', 'Penjelasan Penilai')
            ->setCellValue('E4', 'Bobot Per Indikator')
            ->setCellValue('F4', 'Nilai Per Indikator')
            ->setCellValue('G4', '∑ Nilai Per Aspek')
            ->setCellValue('H4', 'Bobot Per Aspek')
            ->setCellValue('I4', 'Nilai Aspek * Bobot Aspek')

            ->setCellValue('K4', 'IKM')
            ->setCellValue('L4', 'Nilai IPP')
            ->setCellValue('M4', 'Kategori IPP')
            ->setCellValue('N4', 'Mutu IPP')
            ->setCellValue('O4', 'Nilai IKPP')
            ->setCellValue('P4', 'Kategori IKPP')
            ->setCellValue('Q4', 'Mutu IKPP');
        
        $sheet->getStyle('A4:I4')->applyFromArray($style_up);
        $sheet->getStyle('K4:Q4')->applyFromArray($style_up);

        $sheet->getStyle('A4:Q4')->getAlignment()->setWrapText(true);
        $sheet->getStyle('A5:D41')->getAlignment()->setWrapText(true);
        $sheet->getStyle('M5:Q5')->getAlignment()->setWrapText(true);
        $sheet->getStyle('E5:I41')->applyFromArray($isi_tengah);
        $sheet->getStyle('A5:A41')->applyFromArray($isi_tengah);
        $sheet->getStyle('B5:B41')->applyFromArray($isi_pinggir);
        $sheet->getStyle('C5:C41')->applyFromArray($isi_pinggir);
        $sheet->getStyle('D5:D41')->applyFromArray($isi_pinggir);
        $sheet->getStyle('K5:Q5')->applyFromArray($isi_tengah);

        $sheet->getStyle('F5:F41')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
        ->getStartColor()->setARGB('E2EFDA');
        $sheet->getStyle('G5:G41')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
        ->getStartColor()->setARGB('BDD7EE');
        $sheet->getStyle('I5:I41')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
        ->getStartColor()->setARGB('FFF2CC');
        

        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(17);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(40);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(40);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(40);


        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(17);
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(17);
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(17);
        $spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(17);
        $spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(15);
        $spreadsheet->getActiveSheet()->getColumnDimension('J')->setWidth(4);
        $spreadsheet->getActiveSheet()->getColumnDimension('K')->setWidth(15);
        $spreadsheet->getActiveSheet()->getColumnDimension('L')->setWidth(12);
        $spreadsheet->getActiveSheet()->getColumnDimension('M')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('N')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('O')->setWidth(8);
        $spreadsheet->getActiveSheet()->getColumnDimension('P')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('Q')->setWidth(10);

        $sheet->setCellValue('B5', '1. Tersedia Standar Pelayanan (SP) yang menjadi acuan dalam pemberian pelayanan kepada publik;');
        $sheet->setCellValue('B6', '2. Tersedia Standar Pelayanan (SP) yang menjadi acuan dalam pemberian pelayanan kepada publik (per jenis layanan);');
        $sheet->setCellValue('B7', '3. Sistem antrian;');
        $sheet->setCellValue('B8', '4. Proses Penyusunan SP telah melibatkan masyarakat dan pihak terkait;');
        $sheet->setCellValue('B9', '5. Tersedia dokumentasi tentang SP yang ditetapkan dan dipublikasikan;');
        $sheet->setCellValue('B10', '6. SP telah sesuai ketentuan peraturan perundang-undangan yang berlaku;');
        $sheet->setCellValue('B11', '7. Informasi atas Standar Pelayanan dapat diakses dengan mudah untuk diketahui dan dipahami oleh masyarakat;');
        $sheet->setCellValue('B12', '8. Tersedia SP yang tepat guna (substansi/isi SP);');
        $sheet->setCellValue('B13', '9. Tersedia Maklumat Pelayanan yang dipublikasikan kepada seluruh lapisan masyarakat;');
        $sheet->setCellValue('B14', '10. Tingginya keterlibatan pengguna layanan dalam pengisian SKM;');
        $sheet->setCellValue('B15', '11. Informasi Survei Kepuasan Masyarakat (SKM) yang diketahui seluruh lapisan masyarakat;');
        $sheet->setCellValue('B16', '12. Tindak lanjut hasil SKM dan kedalaman ruang lingkup;');
        $sheet->setCellValue('B17', '13. Kecepatan tindak lanjut hasil SKM seluruh jenis pelayanan;');
        $sheet->setCellValue('B18', '14. Tersedia pelaksana layanan dengan kompetensi sesuai kebutuhan jenis layanan;');
        $sheet->setCellValue('B19', '15. Pelaksana layanan responsif waktu;');
        $sheet->setCellValue('B20', '16. Kesigapan pelaksana dalam memberikan layanan (kecepatan);');
        $sheet->setCellValue('B21', '17. Tersedia aturan perilaku dan kode etik pelaksana layanan;');
        $sheet->setCellValue('B22', '18. Pemberian penghargaan;');
        $sheet->setCellValue('B23', '19. Pemberian sanksi;');
        $sheet->setCellValue('B24', '20. Budaya pelayanan;');
        $sheet->setCellValue('B25', '21. Tersedia tempat parkir yang aman, nyaman, dan mudah diakses;');
        $sheet->setCellValue('B26', '22. Tersedia sarana ruang tunggu yang nyaman;');
        $sheet->setCellValue('B27', '23. Tersedia sarana toilet khusus pengguna layanan yang bersih, sehat dan memadai;');
        $sheet->setCellValue('B28', '24. Tersedia sarana dan prasarana bagi pengguna layanan yang berkebutuhan khusus;');
        $sheet->setCellValue('B29', '25. Tersedia sarana dan prasarana penunjang lainnya (Ruang laktasi/nursery, arena bermain anak, kantin/fotocopy/took ATK;');
        $sheet->setCellValue('B30', '26. Tersedia sarana front office untuk layanan konsultasi dan informasi tatap muka langsung;');
        $sheet->setCellValue('B31', '27. Tersedia sarana front office untuk layanan pengaduan tatap muka langsung;');
        $sheet->setCellValue('B32', '28. Sistem infomasi pelayanan publik untuk informasi publik;');
        $sheet->setCellValue('B33', '29. Sistem informasi pelayanan publik pendukung operasional pelayanan;');
        $sheet->setCellValue('B34', '30. Kepemilikan situs dan pengelola situs;');
        $sheet->setCellValue('B35', '31. Permutakhiran data dan informasi situs;');
        $sheet->setCellValue('B36', '32. Tersedia informasi non elektronik yang mendukung pelayanan yang diketahui seluruh lapisan masyarakat;');
        $sheet->setCellValue('B37', '33. Tersedia sarana dan media konsultasilayanan yang bisa dimanfaatkan semua lapisan masyarakat;');
        $sheet->setCellValue('B38', '34. Tersedia rubrik, dokumentasi, dan publikasi konsultasi yang mudah diakses;');
        $sheet->setCellValue('B39', '35. Tersedia sarana dan media pelayanan pengaduan yang bisa dimanfaatkan semua lapisan masyarakat;');
        $sheet->setCellValue('B40', '36. Tersedia rubrik, dokumentasi, dan publikasi proses/hasil pegaduan yang mudah diakses;');
        $sheet->setCellValue('B41', '37. Tersedia inovasi;');

        $sheet->setCellValue('C5', $url['url_1']);
        $sheet->setCellValue('C6', $url['url_2']);
        $sheet->setCellValue('C7', $url['url_3']);
        $sheet->setCellValue('C8', $url['url_4']);
        $sheet->setCellValue('C9', $url['url_5']);
        $sheet->setCellValue('C10', $url['url_6']);
        $sheet->setCellValue('C11', $url['url_7']);
        $sheet->setCellValue('C12', $url['url_8']);
        $sheet->setCellValue('C13', $url['url_9']);
        $sheet->setCellValue('C14', $url['url_10']);
        $sheet->setCellValue('C15', $url['url_11']);
        $sheet->setCellValue('C16', $url['url_12']);
        $sheet->setCellValue('C17', $url['url_13']);
        $sheet->setCellValue('C18', $url['url_14']);
        $sheet->setCellValue('C19', $url['url_15']);
        $sheet->setCellValue('C20', $url['url_16']);
        $sheet->setCellValue('C21', $url['url_17']);
        $sheet->setCellValue('C22', $url['url_18']);
        $sheet->setCellValue('C23', $url['url_19']);
        $sheet->setCellValue('C24', $url['url_20']);
        $sheet->setCellValue('C25', $url['url_21']);
        $sheet->setCellValue('C26', $url['url_22']);
        $sheet->setCellValue('C27', $url['url_23']);
        $sheet->setCellValue('C28', $url['url_24']);
        $sheet->setCellValue('C29', $url['url_25']);
        $sheet->setCellValue('C30', $url['url_26']);
        $sheet->setCellValue('C31', $url['url_27']);
        $sheet->setCellValue('C32', $url['url_28']);
        $sheet->setCellValue('C33', $url['url_29']);
        $sheet->setCellValue('C34', $url['url_30']);
        $sheet->setCellValue('C35', $url['url_31']);
        $sheet->setCellValue('C36', $url['url_32']);
        $sheet->setCellValue('C37', $url['url_33']);
        $sheet->setCellValue('C38', $url['url_34']);
        $sheet->setCellValue('C39', $url['url_35']);
        $sheet->setCellValue('C40', $url['url_36']);
        $sheet->setCellValue('C41', $url['url_37']);

        $sheet->setCellValue('D5', $pnl['pnl_1']);
        $sheet->setCellValue('D6', $pnl['pnl_2']);
        $sheet->setCellValue('D7', $pnl['pnl_3']);
        $sheet->setCellValue('D8', $pnl['pnl_4']);
        $sheet->setCellValue('D9', $pnl['pnl_5']);
        $sheet->setCellValue('D10', $pnl['pnl_6']);
        $sheet->setCellValue('D11', $pnl['pnl_7']);
        $sheet->setCellValue('D12', $pnl['pnl_8']);
        $sheet->setCellValue('D13', $pnl['pnl_9']);
        $sheet->setCellValue('D14', $pnl['pnl_10']);
        $sheet->setCellValue('D15', $pnl['pnl_11']);
        $sheet->setCellValue('D16', $pnl['pnl_12']);
        $sheet->setCellValue('D17', $pnl['pnl_13']);
        $sheet->setCellValue('D18', $pnl['pnl_14']);
        $sheet->setCellValue('D19', $pnl['pnl_15']);
        $sheet->setCellValue('D20', $pnl['pnl_16']);
        $sheet->setCellValue('D21', $pnl['pnl_17']);
        $sheet->setCellValue('D22', $pnl['pnl_18']);
        $sheet->setCellValue('D23', $pnl['pnl_19']);
        $sheet->setCellValue('D24', $pnl['pnl_20']);
        $sheet->setCellValue('D25', $pnl['pnl_21']);
        $sheet->setCellValue('D26', $pnl['pnl_22']);
        $sheet->setCellValue('D27', $pnl['pnl_23']);
        $sheet->setCellValue('D28', $pnl['pnl_24']);
        $sheet->setCellValue('D29', $pnl['pnl_25']);
        $sheet->setCellValue('D30', $pnl['pnl_26']);
        $sheet->setCellValue('D31', $pnl['pnl_27']);
        $sheet->setCellValue('D32', $pnl['pnl_28']);
        $sheet->setCellValue('D33', $pnl['pnl_29']);
        $sheet->setCellValue('D34', $pnl['pnl_30']);
        $sheet->setCellValue('D35', $pnl['pnl_31']);
        $sheet->setCellValue('D36', $pnl['pnl_32']);
        $sheet->setCellValue('D37', $pnl['pnl_33']);
        $sheet->setCellValue('D38', $pnl['pnl_34']);
        $sheet->setCellValue('D39', $pnl['pnl_35']);
        $sheet->setCellValue('D40', $pnl['pnl_36']);
        $sheet->setCellValue('D41', $pnl['pnl_37']);
        
        $sheet->setCellValue('E5', '8,90%');
        $sheet->setCellValue('E6', '8,90%');
        $sheet->setCellValue('E7', '7,10%');
        $sheet->setCellValue('E8', '7,10%');
        $sheet->setCellValue('E9', '7,10%');
        $sheet->setCellValue('E10', '7,10%');
        $sheet->setCellValue('E11', '7,10%');
        $sheet->setCellValue('E12', '7,10%');
        $sheet->setCellValue('E13', '8,90%');
        $sheet->setCellValue('E14', '8,90%');
        $sheet->setCellValue('E15', '7,10%');
        $sheet->setCellValue('E16', '7,10%');
        $sheet->setCellValue('E17', '7,10%');
        $sheet->setCellValue('E18', '13,60%');
        $sheet->setCellValue('E19', '13,60%');
        $sheet->setCellValue('E20', '9,10%');
        $sheet->setCellValue('E21', '13,60%');
        $sheet->setCellValue('E22', '18,20%');
        $sheet->setCellValue('E23', '13,60%');
        $sheet->setCellValue('E24', '18,20%');
        $sheet->setCellValue('E25', '13,30%');
        $sheet->setCellValue('E26', '13,30%');
        $sheet->setCellValue('E27', '13,30%');
        $sheet->setCellValue('E28', '20%');
        $sheet->setCellValue('E29', '20%');
        $sheet->setCellValue('E30', '6,70%');
        $sheet->setCellValue('E31', '13,30%');
        $sheet->setCellValue('E32', '20%');
        $sheet->setCellValue('E33', '25%');
        $sheet->setCellValue('E34', '25%');
        $sheet->setCellValue('E35', '15%');
        $sheet->setCellValue('E36', '15%');
        $sheet->setCellValue('E37', '20%');
        $sheet->setCellValue('E38', '20%');
        $sheet->setCellValue('E39', '30%');
        $sheet->setCellValue('E40', '30%');
        $sheet->setCellValue('E41', '100%');

        $sheet->setCellValue('F5', $list['ni_1']);
        $sheet->setCellValue('F6', $list['ni_2']);
        $sheet->setCellValue('F7', $list['ni_3']);
        $sheet->setCellValue('F8', $list['ni_4']);
        $sheet->setCellValue('F9', $list['ni_5']);
        $sheet->setCellValue('F10', $list['ni_6']);
        $sheet->setCellValue('F11', $list['ni_7']);
        $sheet->setCellValue('F12', $list['ni_8']);
        $sheet->setCellValue('F13', $list['ni_9']);
        $sheet->setCellValue('F14', $list['ni_10']);
        $sheet->setCellValue('F15', $list['ni_11']);
        $sheet->setCellValue('F16', $list['ni_12']);
        $sheet->setCellValue('F17', $list['ni_13']);
        $sheet->setCellValue('F18', $list['ni_14']);
        $sheet->setCellValue('F19', $list['ni_15']);
        $sheet->setCellValue('F20', $list['ni_16']);
        $sheet->setCellValue('F21', $list['ni_17']);
        $sheet->setCellValue('F22', $list['ni_18']);
        $sheet->setCellValue('F23', $list['ni_19']);
        $sheet->setCellValue('F24', $list['ni_20']);
        $sheet->setCellValue('F25', $list['ni_21']);
        $sheet->setCellValue('F26', $list['ni_22']);
        $sheet->setCellValue('F27', $list['ni_23']);
        $sheet->setCellValue('F28', $list['ni_24']);
        $sheet->setCellValue('F29', $list['ni_25']);
        $sheet->setCellValue('F30', $list['ni_26']);
        $sheet->setCellValue('F31', $list['ni_27']);
        $sheet->setCellValue('F32', $list['ni_28']);
        $sheet->setCellValue('F33', $list['ni_29']);
        $sheet->setCellValue('F34', $list['ni_30']);
        $sheet->setCellValue('F35', $list['ni_31']);
        $sheet->setCellValue('F36', $list['ni_32']);
        $sheet->setCellValue('F37', $list['ni_33']);
        $sheet->setCellValue('F38', $list['ni_34']);
        $sheet->setCellValue('F39', $list['ni_35']);
        $sheet->setCellValue('F40', $list['ni_36']);
        $sheet->setCellValue('F41', $list['ni_37']);

        $sheet->setCellValue('A5','I. Kebijakan Pelayanan');
        $sheet->setCellValue('A18','II. Profesionalisme SDM');
        $sheet->setCellValue('A25','III. Sarana dan Prasarana');
        $sheet->setCellValue('A32','IV. Sistem Informasi Pelayanan Publik');
        $sheet->setCellValue('A37','V. Konsultasi dan Pengaduan');
        $sheet->setCellValue('A41','VI. Inovasi');

        $sheet->setCellValue('G5', $list['nt_i']);
        $sheet->setCellValue('G18', $list['nt_ii']);
        $sheet->setCellValue('G25', $list['nt_iii']);
        $sheet->setCellValue('G32', $list['nt_iv']);
        $sheet->setCellValue('G37', $list['nt_v']);
        $sheet->setCellValue('G41', $list['ni_37']);

        $sheet->setCellValue('H5','30%');
        $sheet->setCellValue('H18','18%');
        $sheet->setCellValue('H25','15%');
        $sheet->setCellValue('H32','15%');
        $sheet->setCellValue('H37','15%');
        $sheet->setCellValue('H41','7%');

        $sheet->setCellValue('I5', $list['np_i']);
        $sheet->setCellValue('I18', $list['np_ii']);
        $sheet->setCellValue('I25', $list['np_iii']);
        $sheet->setCellValue('I32', $list['np_iv']);
        $sheet->setCellValue('I37', $list['np_v']);
        $sheet->setCellValue('I41', $list['np_vi']);

        $sheet->setCellValue('K5', $list['nilai_ikm']);
        $sheet->setCellValue('L5', $list['nilai_ipp']);
        $sheet->setCellValue('M5', $list['ipp']);
        $sheet->setCellValue('N5', $list['ipp_mutu']);
        $sheet->setCellValue('O5', $list['nilai_ikpp']);
        $sheet->setCellValue('P5', $list['ikpp']);
        $sheet->setCellValue('Q5', $list['ikpp_mutu']);

        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $filename =  $judul . " " . date('Y-m-d-His');

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $filename . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

}
