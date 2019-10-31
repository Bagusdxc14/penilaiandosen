<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/API_Controller.php';

class Mahasiswa extends API_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model("Mahasiswa_model", "MahasiswaModel");
    }

    public function Panggil()
    {
        $Output = $this->MahasiswaModel->GetMahasiswa();
        if(!empty($Output)){
            $this->api_return(
                [
                    "status" => true,
                    "result" => $Output
                ], 200
            );
        }else{
            $this->api_return(
                [
                    "status" => false
                ], 400
            );
        }
    }
}
