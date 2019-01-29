
<?php 
    include "classes.php";
    include "index.php";

    $nrofApe = $_POST['apor'];
    $nrofGiraff = $_POST['giraffer'];
    $nrofTiger = $_POST['tigrar'];
    $nrofCoco = $_POST['coco'];

    for($i = 0; $i < $nrofApe; $i++){
        $Animal1 = new Apa("Apa");
        echo $Animal1->GetImage()."<br>";
    }
    for($i = 0; $i < $nrofGiraff; $i++){
        $Animal2 = new Giraff("Giraff");
        echo $Animal2->GetImage()."<br>";
        echo $Animal2->MakeSound()."<br>";
    }


    for($i = 0; $i < $nrofTiger; $i++){
        $Animal3 = new Tiger("Tiger");
        echo $Animal3->GetImage()."<br>";
        echo $Animal3->MakeSound()."<br>";
    }
    
    for($i = 0; $i < $nrofCoco; $i++){
        $Food1 = new Cocos("Kokosnöt");
        echo $Food1->GetImage()."<br>";
        echo $Food1->MakeSound()."<br>";
    }
    



?>

