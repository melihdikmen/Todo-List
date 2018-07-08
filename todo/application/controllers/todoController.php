<?php

class TodoController extends CI_Controller
{


public function index()
{

    $this->load->model("todoModel");
    $rows=$this->todoModel->getAll();

    $query=new stdClass();
    $query->rows=$rows;

    $this->load->view("Home",$query);
}

public function insert()
{

    $this->load->model("todoModel");

    $title=$this->input->post("title");
    $data = array('title' =>$title ,
                  'isCompleted'=>0 );

      $insert=$this->todoModel->insert($data);

            if($insert)
            {

              redirect(base_url());
            }
}

 public function delete($id)
{
    $this->load->model("todoModel");

    $delete=$this->todoModel->delete($id);

    if($delete)
    {

      redirect(base_url());
    }
}


public function isCompletedSetter($id)
{
    $completed=$this->input->post("completed")=="true" ? 1:0;



    $this->load->model("todoModel");

    $this->todoModel->update($id,$data = array('isCompleted' =>$completed));

}







}
 ?>
