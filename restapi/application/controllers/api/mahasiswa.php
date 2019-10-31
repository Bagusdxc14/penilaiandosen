<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/API_Controller.php';

class Mahasiswa extends API_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model("Mahasiswa_model", "MahasiswaModel");
    }

    public function GetMahasiswa()
    {
        $id = $_GET;
        $Output = $this->MahasiswaModel->get($id);
        if(!empty($Output)){
            $this->api_return(
                [
                    "result"=>$Output
                ], 200
            );
        }else{
            $this->api_return(
                [
                    "result"=>"ko tra ada data"
                ], 400
            );
        }
    }

    public function InsertMahasiswa()
    {
        $data = json_decode($this->input->raw_input_stream);
        $Output = $this->MahasiswaModel->insert($data);
        if($Output){
            $this->api_return(
                [
                    "result"=>$Output
                ], 200
            );
        }else{
            $this->api_return(
                [
                    "result"=>$Output
                ], 400
            );
        }
    }

    public function UpdateMahasiswa()
    {
        $data = json_decode($this->input->raw_input_stream);
        $result = $this->MahasiswaModel->update($data);
        if ($result){
            $this->api_return(
                [
                    'status'=>true
                ],
            200);
        }else{
            $this->api_return(
                [
                    'status'=>false
                ],
            400);
        }
    }

        

    public function DeleteMahasiswa()
    {
        $id = $_GET;
        $result = $this->MahasiswaModel->delete($id);
        if ($result){
            $this->api_return(
                [
                    'status'=>true
                ],
            200);
        }else{
            $this->api_return(
                [
                    'status'=>false
                ],
            400);
        }
    }
}