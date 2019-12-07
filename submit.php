<?php
#var_dump($_POST);

$today = date("Y-m");
$presentDateMax = strtotime("-2 months");
# echo date("Y-m", $presentDateMax);
$presentMaxYearMonth = date("Y-m", $presentDateMax);

# echo $_POST["endDate"] > $presentMaxYearMonth
?>


<html>
    <head>
        <title>Resume</title>
        <link href="./style.css" rel="stylesheet">
</head>
    <body>
        <div class="container">
        <input type="button" value="Edit Data" onclick="history.back()">
        <h1><?php echo $_POST["nameField"] ?></h1>
        <p>
            <?php echo $_POST["emailField"] ?> - 
            <a href="<?php echo $_POST["githubField"] ?>"><?php echo $_POST["githubField"] ?></a>
        </p>

        <hr>
        <h2>Skills</h2>
        <?php 
                $skill_array = [];
                $skills = $_POST["skills"];
                if($skills != ""){
                    $skill_lines = explode("\n", $skills);
                    foreach($skill_lines as $line) {
                        if (trim($line) != "") { 
                            array_push($skill_array, trim($line)); 
                        }
                    }
                }
            ?>
         <ul class="skill-list">  
            <?php
                $idx = 1;  
                foreach($skill_array as $line) { 
                    $idx += 1;
                    if ($idx % 4 == 0) {
                    ?>

                <li><?php echo $line; ?></li>
            <?php } else { ?>
                <li><?php echo $line; ?></li>
                <?php } } ?>
        </ul>


        <h2>Work Experience</h2>
        <p> 
            <i><?php echo $_POST["jobTitle"] ?></i> - <?php echo $_POST["companyName"] ?>
        </p>
        <p>
            <?php echo $_POST["startDate"] ?> - 
            <?php if($_POST["endDate"] > $presentMaxYearMonth) {
                echo "Present";
            }
            else {
                echo $_POST["endDate"]; 
            } ?>
        
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
        </div>
    </body>
</html>