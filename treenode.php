<?php

    class TreeNode 
    {
        public $data = NULL;
        public $children = [];
        public function __construct(string $data = NULL)
        {
            $this->data = $data ;
        }
        public function addChildren(TreeNode $node)
        {
            $this->children[] = $node; 
        }
    }
    class Tree
    {
        public $root = NULL ;
        public function __construct(TreeNode $node)
        {
            $this->root = $node;
        }
        public function traverse(TreeNode $node, int $lever = 0)
        {
            if ($node)
            {
                echo str_repeat('---', $lever);
                echo $node->data . '</br>';
                foreach ($node->children as $childNode)
                {
                    $this->traverse($childNode, $lever +1);
                }
            }
        }
    }
    $sum = new TreeNode ('SUM');
    $tree = new Tree ($sum);
    $one = new TreeNode ('one');
    $tow = new TreeNode ('tow ');
    $there = new TreeNode ('there');
    $one1 = new TreeNode ('baby1');
    $tow1 = new TreeNode ('baby2');
    $there1 = new TreeNode ('baby3');
    $obj = new TreeNode('one baby1');
    $obj1 = new TreeNode('one baby2');
    
    $sum->addChildren($one);
    $sum->addChildren($tow);
    $sum->addChildren($there);
    $one->addChildren($one1);
    $tow->addChildren($tow1);
    $there->addChildren($there1);
    $one1->addChildren($obj);
    $obj->addChildren($obj1);
    $tree->traverse($tree->root);
?>