<?php
include_once("model\product.php");
class Book extends Product{
    private $author;
    private $message;

    public function __construct($id,$title,$price,$author,$message){
        parent::__construct($id,$title,$price);
        $this->author = $author;
        $this->message = $message;
        
    }
    public function getAuthor(){
        return $this->author;
    }
    public function getMessage(){
        return $this->message;
    }
}