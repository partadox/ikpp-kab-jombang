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

    public function export_excel($id_ikpp)
    {
        // $uri       = service('uri');
        // $id_ikpp   = $uri->getSegment(3);
        if ($id_ikpp != NULL) {
            $list = $this->ikpp->find($id_ikpp);;
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

        $sheet->mergeCells('E5:E17');
        $sheet->mergeCells('E18:E24');
        $sheet->mergeCells('E25:E31');
        $sheet->mergeCells('E32:E36');
        $sheet->mergeCells('E37:E40');

        $sheet->mergeCells('F5:F17');
        $sheet->mergeCells('F18:F24');
        $sheet->mergeCells('F25:F31');
        $sheet->mergeCells('F32:F36');
        $sheet->mergeCells('F37:F40');

        $sheet->mergeCells('G5:G17');
        $sheet->mergeCells('G18:G24');
        $sheet->mergeCells('G25:G31');
        $sheet->mergeCells('G32:G36');
        $sheet->mergeCells('G37:G40');

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A4', 'Bagian')
            ->setCellValue('B4', 'Indikator')
            ->setCellValue('C4', 'Bobot Per Indikator')
            ->setCellValue('D4', 'Nilai Per Indikator')
            ->setCellValue('E4', '∑ Nilai Per Aspek')
            ->setCellValue('F4', 'Bobot Per Aspek')
            ->setCellValue('G4', 'Nilai Aspek * Bobot Aspek')

            ->setCellValue('I4', 'IKM')
            ->setCellValue('J4', 'Nilai IPP')
            ->setCellValue('K4', 'Kategori IPP')
            ->setCellValue('L4', 'Mutu IPP')
            ->setCellValue('M4', 'Nilai IKPP')
            ->setCellValue('N4', 'Kategori IKPP')
            ->setCellValue('O4', 'Mutu IKPP');
        
        $sheet->getStyle('A4:G4')->applyFromArray($style_up);
        $sheet->getStyle('I4:O4')->applyFromArray($style_up);

        $sheet->getStyle('A4:O4')->getAlignment()->setWrapText(true);
        $sheet->getStyle('A5:B41')->getAlignment()->setWrapText(true);
        $sheet->getStyle('K5:O5')->getAlignment()->setWrapText(true);
        $sheet->getStyle('C5:G41')->applyFromArray($isi_tengah);
        $sheet->getStyle('A5:A41')->applyFromArray($isi_tengah);
        $sheet->getStyle('B5:B41')->applyFromArray($isi_pinggir);
        $sheet->getStyle('I5:O5')->applyFromArray($isi_tengah);

        $sheet->getStyle('D5:D41')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
        ->getStartColor()->setARGB('E2EFDA');
        $sheet->getStyle('E5:E41')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
        ->getStartColor()->setARGB('BDD7EE');
        $sheet->getStyle('G5:G41')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
        ->getStartColor()->setARGB('FFF2CC');
        

        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(17);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(40);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(17);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(17);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(17);
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(17);
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(15);
        $spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(4);
        $spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(15);
        $spreadsheet->getActiveSheet()->getColumnDimension('J')->setWidth(12);
        $spreadsheet->getActiveSheet()->getColumnDimension('K')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('L')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('M')->setWidth(8);
        $spreadsheet->getActiveSheet()->getColumnDimension('N')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('O')->setWidth(10);

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
        
        $sheet->setCellValue('C5', '8,90%');
        $sheet->setCellValue('C6', '8,90%');
        $sheet->setCellValue('C7', '7,10%');
        $sheet->setCellValue('C8', '7,10%');
        $sheet->setCellValue('C9', '7,10%');
        $sheet->setCellValue('C10', '7,10%');
        $sheet->setCellValue('C11', '7,10%');
        $sheet->setCellValue('C12', '7,10%');
        $sheet->setCellValue('C13', '8,90%');
        $sheet->setCellValue('C14', '8,90%');
        $sheet->setCellValue('C15', '7,10%');
        $sheet->setCellValue('C16', '7,10%');
        $sheet->setCellValue('C17', '7,10%');
        $sheet->setCellValue('C18', '13,60%');
        $sheet->setCellValue('C19', '13,60%');
        $sheet->setCellValue('C20', '9,10%');
        $sheet->setCellValue('C21', '13,60%');
        $sheet->setCellValue('C22', '18,20%');
        $sheet->setCellValue('C23', '13,60%');
        $sheet->setCellValue('C24', '18,20%');
        $sheet->setCellValue('C25', '13,30%');
        $sheet->setCellValue('C26', '13,30%');
        $sheet->setCellValue('C27', '13,30%');
        $sheet->setCellValue('C28', '20%');
        $sheet->setCellValue('C29', '20%');
        $sheet->setCellValue('C30', '6,70%');
        $sheet->setCellValue('C31', '13,30%');
        $sheet->setCellValue('C32', '20%');
        $sheet->setCellValue('C33', '25%');
        $sheet->setCellValue('C34', '25%');
        $sheet->setCellValue('C35', '15%');
        $sheet->setCellValue('C36', '15%');
        $sheet->setCellValue('C37', '20%');
        $sheet->setCellValue('C38', '20%');
        $sheet->setCellValue('C39', '30%');
        $sheet->setCellValue('C40', '30%');
        $sheet->setCellValue('C41', '10%');

        $sheet->setCellValue('D5', $list['ni_1']);
        $sheet->setCellValue('D6', $list['ni_2']);
        $sheet->setCellValue('D7', $list['ni_3']);
        $sheet->setCellValue('D8', $list['ni_4']);
        $sheet->setCellValue('D9', $list['ni_5']);
        $sheet->setCellValue('D10', $list['ni_6']);
        $sheet->setCellValue('D11', $list['ni_7']);
        $sheet->setCellValue('D12', $list['ni_8']);
        $sheet->setCellValue('D13', $list['ni_9']);
        $sheet->setCellValue('D14', $list['ni_10']);
        $sheet->setCellValue('D15', $list['ni_11']);
        $sheet->setCellValue('D16', $list['ni_12']);
        $sheet->setCellValue('D17', $list['ni_13']);
        $sheet->setCellValue('D18', $list['ni_14']);
        $sheet->setCellValue('D19', $list['ni_15']);
        $sheet->setCellValue('D20', $list['ni_16']);
        $sheet->setCellValue('D21', $list['ni_17']);
        $sheet->setCellValue('D22', $list['ni_18']);
        $sheet->setCellValue('D23', $list['ni_19']);
        $sheet->setCellValue('D24', $list['ni_20']);
        $sheet->setCellValue('D25', $list['ni_21']);
        $sheet->setCellValue('D26', $list['ni_22']);
        $sheet->setCellValue('D27', $list['ni_23']);
        $sheet->setCellValue('D28', $list['ni_24']);
        $sheet->setCellValue('D29', $list['ni_25']);
        $sheet->setCellValue('D30', $list['ni_26']);
        $sheet->setCellValue('D31', $list['ni_27']);
        $sheet->setCellValue('D32', $list['ni_28']);
        $sheet->setCellValue('D33', $list['ni_29']);
        $sheet->setCellValue('D34', $list['ni_30']);
        $sheet->setCellValue('D35', $list['ni_31']);
        $sheet->setCellValue('D36', $list['ni_32']);
        $sheet->setCellValue('D37', $list['ni_33']);
        $sheet->setCellValue('D38', $list['ni_34']);
        $sheet->setCellValue('D39', $list['ni_35']);
        $sheet->setCellValue('D40', $list['ni_36']);
        $sheet->setCellValue('D41', $list['ni_37']);

        $sheet->setCellValue('A5','I. Kebijakan Pelayanan');
        $sheet->setCellValue('A18','II. Profesionalisme SDM');
        $sheet->setCellValue('A25','III. Sarana dan Prasarana');
        $sheet->setCellValue('A32','IV. Sistem Informasi Pelayanan Publik');
        $sheet->setCellValue('A37','V. Konsultasi dan Pengaduan');
        $sheet->setCellValue('A41','VI. Inovasi');

        $sheet->setCellValue('E5', $list['nt_i']);
        $sheet->setCellValue('E18', $list['nt_ii']);
        $sheet->setCellValue('E25', $list['nt_iii']);
        $sheet->setCellValue('E32', $list['nt_iv']);
        $sheet->setCellValue('E37', $list['nt_v']);
        $sheet->setCellValue('E41', $list['ni_37']);

        $sheet->setCellValue('F5','30%');
        $sheet->setCellValue('F18','18%');
        $sheet->setCellValue('F25','15%');
        $sheet->setCellValue('F32','15%');
        $sheet->setCellValue('F37','15%');
        $sheet->setCellValue('F41','7%');

        $sheet->setCellValue('G5', $list['np_i']);
        $sheet->setCellValue('G18', $list['np_ii']);
        $sheet->setCellValue('G25', $list['np_iii']);
        $sheet->setCellValue('G32', $list['np_iv']);
        $sheet->setCellValue('G37', $list['np_v']);
        $sheet->setCellValue('G41', $list['np_vi']);

        $sheet->setCellValue('I5', $list['nilai_ikm']);
        $sheet->setCellValue('J5', $list['nilai_ipp']);
        $sheet->setCellValue('K5', $list['ipp']);
        $sheet->setCellValue('L5', $list['ipp_mutu']);
        $sheet->setCellValue('M5', $list['nilai_ikpp']);
        $sheet->setCellValue('N5', $list['ikpp']);
        $sheet->setCellValue('O5', $list['ikpp_mutu']);

        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $filename =  $judul . " " . date('Y-m-d-His');

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $filename . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

}
