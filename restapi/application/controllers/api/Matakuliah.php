<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/API_Controller.php';

class Matakuliah extends API_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model("Matakuliah_model", "MatakuliahModel");
    }

    public function GetMatakuliah()
    {
        $id = $_GET;
        $Output = $this->MatakuliahModel->get($id);
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

    public function InsertMatakuliah()
    {
        $data = json_decode($this->input->raw_input_stream);
        $Output = $this->MatakuliahModel->insert($data);
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

    public function UpdateMatakuliah()
    {
        $data = json_decode($this->input->raw_input_stream);
        $result = $this->MatakuliahModel->update($data);
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

        

    public function DeleteMatakuliah()
    {
        $id = $_GET;
        $result = $this->MatakuliahModel->delete($id);
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