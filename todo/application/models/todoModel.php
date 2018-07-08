<?php
class TodoModel extends CI_Model
{
  public function insert($data = array())
  {
      return $this->db->insert("todo",$data);
  }


  public function delete($id)
  {
      return $this->db->where("id",$id)->delete("todo");
  }

  public function getAll()
  {
      return $this->db->get("todo")->result();
  }


  public function update($id,$data=array())
  {
      return $this->db->where("id",$id)->update("todo",$data);
  }

  public function get()
  {

  }



}



 ?>
