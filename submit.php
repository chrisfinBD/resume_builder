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
                    $duty_lines = explode("\n", $duties);
                    foreach($duty_lines as $line) {
                        if (trim($line) != "") { 
                            array_push($duty_array, trim($line)); 
                        }
                    }
                }
            ?>
         <ul>  
                <?php  foreach($duty_array as $line) { ?>
                    <li><?php echo $line; ?></li>
                <?php } ?>
            </ul>

        <h2>Education</h2>
        <p>  
            <?php echo $_POST["schoolName"] ?>
            <br />
            <?php echo $_POST["eduField"] ?> <?php echo $_POST["gradYear"] ?>
        </p>
    </body>
</html>