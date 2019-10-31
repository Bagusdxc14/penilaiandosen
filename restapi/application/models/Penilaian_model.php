<?php

class Penilaian_Model extends CI_Model
{
    public function insert($data)
    {
        $result = $this->db->insert("penilaian", $data);
        return $result;
    }

    public function get($id)
    {
        if($id != null){
            $this->db->where("idpenilaian", $id['idpenilaian']);
            $result =  $this->db->get("penilaian");
            return $result->result_array();
        }else{
            $result =  $this->db->get("penilaian");
            return $result->result_array();
        }
    }

    public function update($data)
    {
        $this->db->where("idpenilaian", $data->idpenilaian);
        $result = $this->db->update("penilaian", $data);
        return $result;
    }

    public function delete($id)
    {
        $this->db->where("idpenilaian", $id['idpenilaian    ']);
            $result =  $this->db->delete("penilaian");
            return $result;
    }
    
}
