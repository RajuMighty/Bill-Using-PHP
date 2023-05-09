<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <form action="index.php" method="post">
        <div class="container">
            <h1 class="heading">Electricity Bill</h1>
            <hr style="margin-bottom: 20px;"> 
            <div class="grid">
                <div>
                    <div class="row">
                        <label for="">Name:</label>
                        <input type="text" placeholder="Your Name" name="name">
                    </div>
                    <div class="row">
                        <label for="">Customer Number:</label>
                        <input type="number" placeholder="CN" name="cn">
                    </div>
                    <div class="row">
                        <label for="">Month:</label>
                        <input type="date">
                    </div>
                    <div class="row">
                        <label for="">Enter the bill Units:</label>
                        <input type="number" placeholder="units" name="units">
                    </div>
                </div>
                <div>
                    <img  src="pic.jpg" alt="">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Amount</button>
        </div>
    </form>

    <?php
        $name=$_POST["name"];
        $id=$_POST["cn"];
        $units=$_POST["units"];
        $res=0;
        if($units<=50 && $units>0){
            $res=3.5*$units;
        }else if($units>50 && $units<=150){
            $res=4.0*$units;
        }else if($units>150 && $units<=250){
            $res=5.20*$units;
        }else if($units>250){
            $res=6.5*$units;
        }else{
            $res=-1;
        }

        if($res==-1){
            echo "Invalid Units";
            return ;
        }
    ?>
    <div class="container">
        <div class="mt-5 p-5 card">
            <h1><?php echo "UserName: $name "; ?></h1>
            <h1><?php echo "User Id: $id "; ?></h1>
            <h1><?php echo "Your Bill is :$res"; ?></h1>
        </div>
        <h1 class="thank">Thank You!!!</h1>
    </div>
</body>
</html>
