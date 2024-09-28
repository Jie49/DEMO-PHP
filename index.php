<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $week = "sunday";
    switch($week){
        case "monday";
        echo "weekdays";
        break;

        case "tuesday";
            echo "Weekdays";
            break;

        case "wednesday";
            echo "weekdays";
            break;
        case "saturday";
        echo "weekends";
        break;

        case "sunday";
        echo "weekends";
        break;

            default:
            echo "not valid";
            break;
    }
    
    
    
    ?>
</body>
</html>