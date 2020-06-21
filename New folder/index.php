<?php 

include('date_tester.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <main>
        <h1>Date Test</h1>
        <?php if(!empty($err_msg)){ ?>
            <p style="color:red;"><?php echo htmlspecialchars($err_msg);?></p>
        <?php } ?>
        <form action="index.php" method="post">

            <div id="data">
                <label for="">Invoice date:</label>
                <input type="date" name="inv_date" 
                value="<?php isset($_POST['inv_date'])? $_POST['inv_date'] :'' ?>"><br>
                <label for="">Due date:</label>
                <input type="date" name="due_date" 
                value="<?php isset($_POST['due_date'])? $_POST['due_date'] :'' ?>"><br>

            </div>
            <div id="buttons">
                <label for="">&nbsp;</label>
                <input type="submit" name="submit" id="submit" value="Calculate"><br>
            </div>
        </form>
    </main>
</body>

</html>