
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple calculator</title>


   
        <!-- tab iconn -->
        <link href="jb5/imgs/calculator.png" rel="icon">
        <!-- <link href="jb5/imgs/calculator.png" rel="icon"> -->

        <link rel="stylesheet" href="style.css">


        

</head>
<body>
    <br><br><br><br><br><br>
    <center>
   
        <div class="rslt">
            <center>
            <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                        if (isset($_POST["a"]) && isset($_POST["b"])){
                            echo $_POST["a"] + $_POST["b"];
                        }
                        elseif (isset($_POST["c"]) && isset($_POST["d"])){
                            echo $_POST["c"] - $_POST["d"];
                        }
                        elseif (isset($_POST["e"]) && isset($_POST["f"])){
                            echo $_POST["c"] * $_POST["d"];
                        }
                        elseif (isset($_POST["g"]) && isset($_POST["h"])){
                            if ($_POST["h"] != 0){
                                echo $_POST["g"] / $_POST["h"];
                            }
                            else{
                                echo "connot divide by zero";
                            }
                        }
                    }
                
            ?>
            </center>
        </div>
    <!-- old one -->
        <!-- for +  -->
        <div class="elimants">
            <center>

    <form action="#" method="post">
        <input type="number" name="a">
        <input type="submit" value="+">
        <input type="number" name="b">
        
    </form>

    <!-- for - -->
    <form action="#" method="post">
        <input type="number" name="c">
        <input type="submit" value="-">
        <input type="number" name="d">
    </form>

     <!-- for x -->
     <form action="#" method="post">
        <input type="number" name="e">
        <input type="submit" value="x">
        <input type="number" name="f">
    </form>

    <!-- for  -->
    <form action="#" method="post">
        <input type="number" name="g">
        <input type="submit" value="%">
        <input type="number" name="h">
    </form>

    </center>  
    
</body>
</html>