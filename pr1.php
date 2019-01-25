<?php
    header("Content-Type: text/html; charset=utf-8");

    class Point{
        private $x;
        private $y;

        public function getX(){
            return $this->x;
        }
        public function getY(){
            return $this->y;
        }
        public function __construct($x, $y){
            $this->x=$x;
            $this->y=$y;
        }
        // public function __destruct(){
        //     echo 'Объект удалён';
        // }
        public function conclusion(){
            echo($this->x.' '.$this->y);
        }
    }
    
    $point = new Point('(x=12.3;', 'y=23.2)');
    $point->getX('(x=12.3;');
    $point->getY('y=23.2)');
    $point->conclusion();