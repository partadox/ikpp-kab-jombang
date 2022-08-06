<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Ikpp extends Model
{
    protected $table      = 'ikpp';
    protected $primaryKey = 'id_ikpp';
    protected $allowedFields = ['id_lembaga','nama_lembaga', 'nilai_ikm', 'nilai_ipp', 'ipp', 'ipp_mutu', 'nilai_ikpp', 'ikpp', 'ikpp_mutu', 'dt', 'survey_id', 'ni_1', 'ni_2', 'ni_3', 'ni_4', 'ni_5','ni_6', 'ni_7', 'ni_8', 'ni_9', 'ni_10', 'ni_11', 'ni_12', 'ni_13', 'ni_14', 'ni_15', 'ni_16', 'ni_17', 'ni_18', 'ni_19', 'ni_20', 'ni_21', 'ni_22', 'ni_23', 'ni_24', 'ni_25', 'ni_26', 'ni_27', 'ni_28', 'ni_29', 'ni_30', 'ni_31', 'ni_32', 'ni_33', 'ni_34', 'ni_35', 'ni_36', 'ni_37', 'nt_i', 'nt_ii', 'nt_iii', 'nt_iv', 'nt_v', 'np_i', 'np_ii', 'np_iii', 'np_iv', 'np_v', 'np_vi'];

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

    public function list()
    {
        return $this->table('ikpp')
            ->orderBy('id_lembaga', 'ASC')
            ->get()->getResultArray();
    }

}
