<?php 
include_once('model\book.php');
class Model{
    /**
     * Here I take data or data create by others file in Model folder 
     */

     public function getBookList(){
         return array(
            'Bangla'=> new Book(1,"Bangla",200,"Tarikul","Very Nice Book"),
            'English'=> new Book(2,"English",200,"Naher","Nice Content"),
            'Math'=> new Book(3,"Math",200,"Sohag","Good Job"),
            'Social'=> new Book(3,"Social",200,"Shila","Really Awesome"),
         );
     }

     public function getBook($title){
         $books = $this->getBookList();
         return $books[$title];
     }
}