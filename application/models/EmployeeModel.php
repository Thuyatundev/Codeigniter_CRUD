<?php

class EmployeeModel extends CI_Model
{
    public function getEmp(){
        $query = $this->db->get('empolyee');
        return $query->result();
    }

    public function insertEmployee($data){
         return $this->db->insert('empolyee',$data);
    }

    public function editEmp($id){
        $query = $this->db->get_where('empolyee',['id'=>$id]);
        return $query->row();
    }

    public function updateEmp($id, $data){
        return $this->db->update('empolyee',$data, ['id'=>$id]);
    }

    public function deleteEmp($id)
    {
        return $this->db->delete('empolyee', ['id'=> $id]);
    }
}