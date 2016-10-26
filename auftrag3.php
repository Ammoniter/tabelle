<?php

for($i=1; $i<=10000; $i++){
        if($i==1){
                echo $i."<br>";
        }
        else if($i==2 || $i==3 || $i==5 || $i==7){
                echo $i."<br>";
        }
        else if(($i%2)!=0){
                if(($i%3)!=0){
                  if(($i%5)!=0){
                    if(($i%7)!=0){
                        echo $i."<br>";
                }
        }

}
}
}
?>
