<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Survey extends Model
{
    protected $table      = 'survey';
    protected $primaryKey = 'survey_id';
    protected $allowedFields = ['survey_ip', 'survey_layanan', 'survey_status', 'survey_dt', 'p1_1', 'p1_2', 'p1_3', 'p1_4', 'p1_5', 'p1_6', 'p1_7', 'p1_8', 'p1_9', 'p1_10', 'p1_11', 'p1_12', 'p1_13'];

    // public function list()
    // {
    //     return $this->table('tb_layanan')
    //         ->join('tb_layanan_kategori', 'tb_layanan_kategori.LK_id = tb_layanan.layanan_kategori')
    //         ->orderBy('layanan_id', 'DESC')
    //         ->get()->getResultArray();
    // }

    public function cekip($ip)
    {
        return $this->table('survey')
            ->where('survey_status', 0)
            ->where('survey_ip', $ip)
            ->countAllResults();
    }

    public function get_survey_id($ip)
    {
        return $this->table('survey')
            ->select('survey_id')
            ->where('survey_status', 0)
            ->where('survey_ip', $ip)
            ->get()
            ->getUnbufferedRow();
    }

}
