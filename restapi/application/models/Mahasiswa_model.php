<?php

class Mahasiswa_Model extends CI_Model
{
    public function insert($data)
    {
        $result = $this->db->insert("mahasiswa", $data);
        return $result;
    }

    public function get($id)
    {
        if($id != null){
            $this->db->where("idmahasiswa", $id['idmahasiswa']);
            $result =  $this->db->get("mahasiswa");
            return $result->result_array();
        }else{
            $result =  $this->db->get("mahasiswa");
            return $result->result_array();
        }
    }

    public function update($data)
    {
        $this->db->where("npm", $data->npm);
        $result = $this->db->update("mahasiswa", $data);
        return $result;
    }

    public function delete($id)
    {
        $this->db->where("npm", $id['npm']);
            $result =  $this->db->delete("mahasiswa");
            return $result;
    }
    
}
