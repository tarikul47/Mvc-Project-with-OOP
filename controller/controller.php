<?php
include_once("model\model.php");
class controller{
 private $model;
 public function __construct(){
     $this->model  = new Model();
 }

public function invoke(){
    if(!isset($_GET['book'])){
        $books = $this->model->getBookList();
        include_once("view/booklist.php");
    }else{
        $books = $this->model->getBook($_GET['book']);
        include_once("view/viewbook.php");
    }
}
}