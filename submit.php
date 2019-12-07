<?php
var_dump($_POST);

echo $_POST["emailField"];
?>


<html>
    <body>
        <h1><?php echo $_POST["nameField"] ?></h1>
        <p>
            <?php echo $_POST["emailField"] ?> - 
            <a href="<?php echo $_POST["githubField"] ?>"><?php echo $_POST["githubField"] ?></a>
        </p>

        <hr>


        <h2>Work Experience</h2>
        <p> 
            <i><?php echo $_POST["jobTitle"] ?></i> - <?php echo $_POST["companyName"] ?>
        </p>
        <p>
            <?php echo $_POST["startDate"] ?> - <?php echo $_POST["endDate"] ?>
        
        </p>

        
            <?php 
                $duty_array = [];
                $duties = $_POST["duties"];
                if($duties != ""){
                    $duty_array = explode("\n", $duties);
                }
            ?>
         <ul>  
                <?php  foreach($duty_array as $line) { ?>
                    <li><?php echo $line; ?></li>
                <?php } ?>
            </ul>

    </body>
</html>