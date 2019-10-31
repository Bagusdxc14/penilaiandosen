<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/API_Controller.php';

class Detailpenilaian extends API_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model("detailpenilaian_model", "detailpenilaianModel");
    }

    public function Getdetailpenilaian()
    {
        $id = $_GET;
        $Output = $this->detailpenilaianModel->get($id);
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

    public function Insertdetailpenilaian()
    {
        $data = json_decode($this->input->raw_input_stream);
        $Output = $this->detailpenilaianModel->insert($data);
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

    public function Updatedetailpenilaian()
    {
        $data = json_decode($this->input->raw_input_stream);
        $result = $this->detailpenilaianModel->update($data);
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

        

    public function Deletedetailpenilaian()
    {
        $id = $_GET;
        $result = $this->detailpenilaianModel->delete($id);
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