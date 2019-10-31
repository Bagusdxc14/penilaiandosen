<?php

class Detailpenilaian_Model extends CI_Model
{
    public function insert($data)
    {
        $result = $this->db->insert("detailpenilaian", $data);
        return $result;
    }

    public function get($id)
    {
        if($id != null){
            $this->db->where("Detailpenilaian", $id['Detailpenilaian']);
            $result =  $this->db->get("detailpenilaian");
            return $result->result_array();
        }else{
            $result =  $this->db->get("detailpenilaian");
            return $result->result_array();
        }
    }

    public function update($data)
    {
        $this->db->where("no", $data->no);
        $result = $this->db->update("detailpenilaian", $data);
        return $result;
    }

    public function delete($id)
    {
        $this->db->where("npm", $id['npm']);
            $result =  $this->db->delete("detailpenilaian");
            return $result;
    }
    
}
