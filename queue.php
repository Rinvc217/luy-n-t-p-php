<?php
//queue là 1 cấu trúc dữ liệu, hoạt động theo cơ chế First-In-First-Out (vào trước ra trước). 
// hay có thể nói là 1 đầu vào 1 đầu ra
class Queue 
{
    private $queue;
    private $limit;

    public function __construct($limit = 10) 
    {
        $this->queue = array();
        $this->limit = $limit;
    }

    public function enqueue($item)
    {
        if (count($this->queue) < $this->limit) {
            array_unshift($this->queue, $item);
        } else {
           echo 'hàng đợi full';
        }
    }

    public function dequeue() 
    {
        if ($this->isEmpty()) 
        {
            echo "hết hàng đợi";
        } else {
            return array_pop($this->queue);
        }
    }

    public function isEmpty() {
        return empty($this->queue);
    }
}
$queue = new Queue();
$queue->enqueue('1');
$queue->enqueue('2');
$queue->enqueue('3');
$queue->enqueue('4');
$queue->enqueue('5');
$queue->enqueue('6');
$queue->enqueue('7');
$queue->enqueue('8');
$queue->enqueue('9');
$queue->enqueue('10');
echo '<pre>';
print_r( $queue);
echo '<pre/>';
$queue->enqueue('11');
echo '<br/>';
echo $queue->dequeue(); 
echo '<br/>';
echo $queue->dequeue();
echo '<br/>'; 
echo $queue->dequeue();
?>