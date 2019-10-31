<?php

class Tahunakademik_Model extends CI_Model
{
    public function insert($data)
    {
        $result = $this->db->insert("Tahunakademik", $data);
        return $result;
    }

    public function get($id)
    {
        if($id != null){
            $this->db->where("idtahunakademik", $id['idtahunakademik']);
            $result =  $this->db->get("tahunakademik");
            return $result->result_array();
        }else{
            $result =  $this->db->get("tahunakademik");
            return $result->result_array();
        }
    }

    public function update($data)
    {
        $this->db->where("idtahunakademik   ", $data->idtahunakademik);
        $result = $this->db->update("tahunakademik", $data);
        return $result;
    }

    public function delete($id)
    {
        $this->db->where("idtahunakademik", $id['idtahunakademik']);
            $result =  $this->db->delete("tahunakademik");
            return $result;
    }
    
}
