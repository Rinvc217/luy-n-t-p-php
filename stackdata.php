<?php
// Stack() là 1 cấu trúc dữ liệu, hoạt động theo cơ chế last in - first out (vào sau ra trước) hoặc ngược lại ;
    class Stack
    {
        private $stack;
        private $limit;
    
        public function __construct($limit = 5) 
        {
            $this->stack = array();
            $this->limit = $limit;
        }
    
        public function push($item)
        {
            if (count($this->stack) < $this->limit) {
                array_unshift($this->stack, $item);
            } else {
               echo 'ngăn xếp full';
            }
        }
    
        public function pop() 
        {
            if ($this->isEmpty()) 
            {
                echo "ngăn xếp rỗng";
            } else {
                return array_shift($this->stack);
            }
        }
    
        public function isEmpty() {
            return empty($this->stack);
        }
    }
    $stack = new Stack();
    $stack->push('1');
    $stack->push('2');
    $stack->push('3');
    $stack->push('4');
    $stack->push('5');
    echo '<pre>';
    print_r( $stack);
    echo '<pre/>';
    $stack->push('6');
    echo '<br/>'.'<br/>'.'<br/>';
    echo 'xuất dữ liệu ra '.'<br/>';    
    echo $stack->pop(); 
    echo '<br/>';
    echo $stack->pop();
    echo '<br/>'; 
    echo $stack->pop(); 
?>
