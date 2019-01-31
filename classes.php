
<?php 
       abstract Class Animal {
           abstract function makeSound(); 
           abstract function getImage();
            
       }
       function AppSound(){
           alert("Apppaaaa");
       }
       
       class Apa extends Animal {
           private $animalName;
           function __construct($animalName) {
            $this->animalName = $animalName;
           }          
           public function get_name() {
               return $this->name . "(" .$this->animalName . ")";
            }
            public function makeSound(){
                print " AAAPPPAAAAA";
            }
            public function getImage() {
                print "<img src='ape.jpg' onclick='generateName()'>";
            }   
        }
       class Tiger extends Animal {
           private $animalName;
           function __construct($animalName) {
            $this->animalName = $animalName;
           }          
           public function get_name() {
               return $this->name . "(" .$this->animalName . ")";
            }
            public function makeSound(){
                print " Raaaawwwrrrr";
            }
            public function getImage() {
                print "<img src='tiger.jpg' onclick='generateName()'>";
            }   
        }
       class Giraff extends Animal {
           private $animalName;
           function __construct($animalName) {
            $this->animalName = $animalName;
           }          
           public function get_name() {
            return $this->name . "(" .$this->animalName . ")";
         }
            public function makeSound(){
                print " Giiirrraff";
            }
            public function getImage() {
                print "<img src='giraff.jpg' onclick='generateName()'>";
            }   
        }
       class Cocos extends Animal {
           private $animalName;
           function __construct($animalName) {
            $this->animalName = $animalName;
           }          
           public function get_name() {
               return $this->name . "(" .$this->animalName . ")";
            }
            public function makeSound(){
                print " CoCOOCOCOCOCOCO Nuts";
            }
            public function getImage() {
                print "<img src='coco.jpg'onclick='generateName()'>";
            }   
        }
  
?>