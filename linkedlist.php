<?php
// 3 loại likedled: đơn , đôi, vòng .
// (Linked List) là một dãy các cấu trúc dữ liệu được kết nối với nhau thông qua các liên kết (link)
// Danh sách liên kết là một cấu trúc dữ liệu bao gồm một nhóm các nút (node) tạo thành một chuỗi.
//  Mỗi nút gồm dữ liệu ở nút đó và tham chiếu đến nút kế tiếp trong chuỗi.
class Node {
    public $next;
    public $data;
    function __construct($data){
        $this->data = $data;
        $this->next = NULL;
    }
    function readNode(){
        return $this->data;
    }
}
class MyLinkedList {
    private $firstNode;
    private $lastNode;
    private $count;
    
    function __construct(){
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }

    public function insertFirst($data){
        $link = new Node($data);
        $link->next  = $this->firstNode;
        $this->firstNode = $link;
        if($this->lastNode == NULL)
            $this->lastNode = $link;
        $this->count++;
    }

    public function insertLast($data)
    {
        if($this->firstNode != NULL)
        {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next=NULL;
            $this->lastNode = $link;
            $this->count++;
        }
        else {
            $this->insertFirst($data);
        }
    }

    public function totalNode()
    {
        return $this->count;
    }

    public function readList(){
        $listData = array();
        $current = $this->firstNode;
        while ($current !=Null){
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}

$linkedList = new MyLinkedList();
$linkedList->insertFirst('1');
$linkedList->insertFirst('2');
$linkedList->insertFirst('3');
$linkedList->insertLast('4');
$linkedList->insertLast('5');
echo '<pre>';
print_r($linkedList);
// echo '<pre>';
$totalNodes = $linkedList->totalNode();
$linkData = $linkedList->readList();
echo 'số Node vừa thêm vào là:' . $totalNodes."<br>";
echo join(' - ' , $linkData);
?>