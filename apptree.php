<?php
    class Person {
        public $name;
        public $relations;
    
        function __construct($name) {
            $this->name      = $name;
            $this->relations = array();
        }
    
        function addRelation($type, $person) {
            if (!isset($this->relations[$type])) {
                $this->relations[$type] = array();
            }
    
            $this->relations[$type][] = $person;
        }
    
        // tra cứu mối quan hệ 
        function getRelations($type) {
            if (!isset($this->relations[$type])) {
                return array();
            }
    
            return $this->relations[$type];
        }
        // vợ chồng
        function getRelation($type) {
            $relations = $this->getRelations($type);
            return empty($relations) ? null : $relations[0];
        }
    
        function __toString() {
            return $this->name;
        }
        
        function addParents($mom, $dad) {
            $mom->addChild($this);
            $dad->addChild($this);
        }
    
        function addChild($child) {
            $this ->addRelation('children', $child);
            $child->addRelation('parents',  $this);
        }
    
        function addSpouse($spouse) {
            $this  ->addRelation('spouse', $spouse);
            $spouse->addRelation('spouse', $this);
        }
    
        function getParents () 
        { 
            return $this->getRelations('parents');  
        }
        function getChildren() 
        { 
            return $this->getRelations('children'); 
        }
        function getSpouse() 
        { 
            return $this->getRelation ('spouse');   
        }
    }
    $sum = new Person('SUM');
    $john  = new Person('John');
    $jane  = new Person('Jane');
    $sara  = new Person('Sara');
    $mike  = new Person('Mike');
    $bobby = new Person('Bobby');
    $roxie = new Person('roxie');
    $billy = new Person('Billy');
    $krixi = new Person('krixi');
    $vera = new Person('vera');
    $sum ->addChild($john);
    $john ->addSpouse ($jane);
    $sara ->addParents($jane, $john);
    $sara ->addSpouse ($mike);
    $bobby->addParents($sara, $mike);
    $billy->addParents($jane, $john);
    $krixi->addSpouse($billy);
    $roxie->addSpouse($bobby);
    $vera->addParents($bobby,$roxie);
    function displayFamilyTree($root, $prefix = "") {
        $parents = array($root);
        if ($root->getSpouse() != null) {
            $parents[] = $root->getSpouse();
        }
        echo $prefix . implode(" và ", $parents) . "<br/>";
        foreach ($root->getChildren() as $child) {
            displayFamilyTree($child, "----$prefix");
        }
    }
    displayFamilyTree($john);
?>