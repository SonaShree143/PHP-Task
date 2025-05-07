<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task</title>
</head>
<body>
    <?php
    
    $event="Birthday";
    $age= 4;
    $returnGift="with Chocolate";
    $numOfItem=10;
    $giftAmount=$numOfItem*50;
    

    if($event){
        echo "Selected event is Birthday <br>";
        if($age>=1 && $age<=5){
            echo "Your age is: $age <br>";
            if($returnGift==="with Chocolate"){
                echo "Return Gift with Chocolates <br>";
                echo "Total No.of Return Gifts: $numOfItem <br>";
                $totalAmount=20000+$giftAmount;
                echo "Total Amount: Rs. $totalAmount";
            }
            elseif($returnGift==="without Chocolate"){
                echo "Return Gift without Chocolates <br>";
                echo "Total No.of Return Gifts: $numOfItem <br>";
                $totalAmount=15000+$giftAmount;
                echo "Total Amount: Rs. $totalAmount";
            }
            else{
                echo "Please do check your data";
              }
        }
        elseif($age>5){
            echo "Your age is: $age <br>";

            if($returnGift==="with Props"){
                echo "Return Gift with Props <br>";
                $totalAmount=25000+$giftAmount;
                echo "Total No.of Return Gifts: $numOfItem <br>";
                echo "Total Amount: Rs. $totalAmount";
            }
            elseif($returnGift==="without Props"){
                echo "Return Gift without Props <br>";
                echo "Total No.of Return Gifts: $numOfItem <br>";
                $totalAmount=20000+$giftAmount;
                echo "Total Amount: Rs. $totalAmount";
            }
            else{
                echo "Please do check your data";
              }
        }
      else{
        echo "Please do check your data";
      }
        
    }
    else{
        echo "Selected event is Marriage";
    }
    ?>
</body>
</html>