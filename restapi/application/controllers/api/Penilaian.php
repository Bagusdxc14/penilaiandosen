<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/API_Controller.php';

class Penilaian extends API_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model("Penilaian_model", "PenilaianModel");
    }

    public function Getpenilaian()
    {
        $id = $_GET;
        $Output = $this->PenilaianModel->get($id);
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

    public function Insertpenilaian()
    {
        $data = json_decode($this->input->raw_input_stream);
        $Output = $this->PenilaianModel->insert($data);
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

    public function Updatepenilaian()
    {
        $data = json_decode($this->input->raw_input_stream);
        $result = $this->penilaianModel->update($data);
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

        

    public function Deletepenilaian()
    {
        $id = $_GET;
        $result = $this->penilaianModel->delete($id);
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