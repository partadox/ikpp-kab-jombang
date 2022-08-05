<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Ikpp extends Model
{
    protected $table      = 'ikpp';
    protected $primaryKey = 'id_ikpp';
    protected $allowedFields = ['id_lembaga','nama_lembaga', 'nilai_ikm', 'nilai_ipp', 'ipp', 'ipp_mutu', 'nilai_ikpp', 'ikpp', 'ikpp_mutu', 'dt', 'survey_id'];

    public function cek_id_lembaga($id_lembaga)
    {
        return $this->table('ikpp')
            ->where('id_lembaga', $id_lembaga)
            ->countAllResults();
    }

    public function select_id_ikpp($id_lembaga)
    {
        return $this->table('ikpp')
            ->select('id_ikpp')
            ->where('id_lembaga', $id_lembaga)
            ->get()
            ->getUnbufferedRow();
    }

}
