<?php 
$inv_date = filter_input(INPUT_POST,'inv_date');
$due_date = filter_input(INPUT_POST,'due_date');

//convert timestamp to year, month,day
$year =floor(abs( strtotime($due_date)-strtotime("now"))/(86400*365));
$month =floor(abs(strtotime($due_date) - strtotime("now"))/(30*86400));
$day =floor(abs(strtotime($due_date) - strtotime("now"))/(86400));

//check day if over 30 day
if($day>30){
$day = abs(30- floor($day/30));
}else{
    $day;
}

// check month if over 12 month
if($month>12){
    $month = floor($month /12);
    }else{
        $month;
    }
//check invoice day > due day ?

if($inv_date>$due_date){
    $err_msg ='Due date must be greater than Invoice date!';
}else{
    $err_msg ='';
}

//if error message exists, go to index page
if($err_msg !=''){
    include('index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="">Invoice date:</label>
    <span><?php echo date('F d, Y',strtotime($inv_date)); ?></span><br>
    <label for="">Due date:</label>
    <span><?php echo date('F d, Y',strtotime($due_date)); ?></span><br>
    <label for="">Current date:</label>
    <span><?php echo date('F d, Y'); ?></span><br>
    <label for="">Current time:</label>
    <span><?php echo date('g:i:s a'); ?></span><br>
    <label for="">Due date message:</label>
    <span><?php
    if(date('Y-m-d')<$due_date){
    echo "This invoice is due in $year years, $month months and $day days."; 
    }else{
        echo " This invoice is due in ". $year ." years, " . $month ." months and ".$day." days overdue.";
    }
    
    ?></span><br>
</body>
</html>
