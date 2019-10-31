<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/API_Controller.php';

class Tahunakademik extends API_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model("Tahunakademik_model", "TahunakademikModel");
    }

    public function GetTahunakademik()
    {
        $id = $_GET;
        $Output = $this->TahunakademikModel->get($id);
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

    public function InsertTahunakademik()
    {
        $data = json_decode($this->input->raw_input_stream);
        $Output = $this->TahunakademikModel->insert($data);
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

    public function UpdateTahunakademik()
    {
        $data = json_decode($this->input->raw_input_stream);
        $result = $this->TahunakademikModel->update($data);
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

        

    public function DeleteTahunakademik()
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