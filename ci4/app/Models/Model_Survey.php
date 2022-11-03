<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Survey extends Model
{
    protected $table      = 'survey';
    protected $primaryKey = 'survey_id';
    protected $allowedFields = ['survey_ip', 'survey_layanan', 'survey_layanan_nama' ,'survey_file', 'survey_url', 'survey_pnl', 'survey_upd', 'survey_status', 'survey_dt', 'p1_1', 'p1_2', 'p1_3', 'p1_4', 'p1_5', 'p1_6', 'p1_7', 'p1_8', 'p1_9', 'p1_10', 'p1_11', 'p1_12', 'p1_13', 'p1_14', 'p1_15', 'p1_16', 'p1_17', 'p1_18', 'p1_19', 'p1_20', 'p1_21', 'p1_22', 'p1_23', 'p1_24', 'p1_25', 'p1_26', 'p1_27', 'p1_28', 'p1_29', 'p1_30', 'p1_31', 'p1_32', 'p1_33', 'p1_34', 'p1_35', 'p1_36', 'p1_37'];

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

    //Get survey id from ip
    public function get_survey_id($ip)
    {
        return $this->table('survey')
            ->select('survey_id')
            ->where('survey_status', 0)
            ->where('survey_ip', $ip)
            ->get()
            ->getUnbufferedRow();
    }

    //Get survey id from id lembaga
    public function list_riwayat($lembaga_id)
    {
        return $this->table('survey')
            ->join('survey_url', 'survey.survey_url = survey_url.survey_url_id')
            ->join('survey_ket_pnl', 'survey.survey_pnl = survey_ket_pnl.survey_pnl_id')
            ->where('survey_status', 1)
            ->where('survey_layanan', $lembaga_id)
            ->orderBy('survey_id', 'DESC')
            ->get()->getResultArray();
    }

}
