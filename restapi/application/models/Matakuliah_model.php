<?php

class Matakuliah_Model extends CI_Model
{
    public function insert($data)
    {
        $result = $this->db->insert("matakuliah", $data);
        return $result;
    }

    public function get($id)
    {
        if($id != null){
            $this->db->where("idmatakuliah", $id['idmatakuliah']);
            $result =  $this->db->get("matakuliah");
            return $result->result_array();
        }else{
            $result =  $this->db->get("matakuliah");
            return $result->result_array();
        }
    }

    public function update($data)
    {
        $this->db->where("kdmk", $data->kdmk);
        $result = $this->db->update("matakuliah", $data);
        return $result;
    }

    public function delete($id)
    {
        $this->db->where("kdmk", $id['kdmk']);
            $result =  $this->db->delete("matakuliah");
            return $result;
    }
    
}
