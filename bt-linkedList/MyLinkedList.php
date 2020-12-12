<?php
include_once ("Element.php");

class MyLinkedList
{
    public $firstNode;
    public $lastNode;
    public $count;

    public function __construct(){
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function addFirst($data){
        $link = new Element($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        if ($this->lastNode === NULL) {
            $this->lastNode = $link;
        }
        $this->count++;
    }

    public function addLast($data)
    {
        if($this->firstNode != NULL){
            $link = new Element($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->count++;
        } else {
            $this->addFirst($data);
        }
    }

    public function readList(){
        $listData = array();
        $current =  $this->firstNode;
        while ($current != NULL)
        {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }

    public function size(){
        return $this->count;
    }

    public function isEmply(){
        return current($this->readList());
    }
}