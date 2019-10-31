<?php

class Kompentensi_Model extends CI_Model
{
    public function insert($data)
    {
        $result = $this->db->insert("kompentensi", $data);
        return $result;
    }

    public function get($id)
    {
        if($id != null){
            $this->db->where("idkompentensi", $id['idkompentensi']);
            $result =  $this->db->get("kompentensi");
            return $result->result_array();
        }else{
            $result =  $this->db->get("kompentensi");
            return $result->result_array();
        }
    }

    public function update($data)
    {
        $this->db->where("no", $data->no);
        $result = $this->db->update("kompentensi", $data);
        return $result;
    }

    public function delete($id)
    {
        $this->db->where("npm", $id['npm']);
            $result =  $this->db->delete("kompentensi");
            return $result;
    }
    
}
