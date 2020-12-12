<?php


class MyList
{
    public $elements;
    public function __construct()
    {
        $this->elements = array();
    }

    public function insert($index, $obj){
        $this->elements->insert($index,$obj);
    }
    public function add($obj){
        array_push($this->elements, $obj);
    }
    public function clear(){
        $this->elements= array();
    }
    public function get($index){
        if($this->isInteger($index) && $index < $this->size()){
            return $this->elements[$index];
        } else {
            die("Error");
        }
    }
    public function isEmpty(){
        if(count($this->elements)==0){
         return true;
        }
        return false;
    }
    public function remove(){
       array_pop($this->elements);
    }
    public function size(){
        return count($this->elements);
    }
    public function isInteger($toCheck){
        return preg_match("/^[0-9]+$/",$toCheck);
    }
    public function sort(){
        sort($this->elements);
    }
    public function reset(){
        reset($this->elements);
    }
    public function indexOf($obj){
        $this->indexOf($obj);
    }
    public function addAll($arr){
        $this->addAll($arr);
    }
}