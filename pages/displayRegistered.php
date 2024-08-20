<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.6">
    <link rel="stylesheet" href="../styles/displayRegistered.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Registered</title>
</head>
<body>
    <nav>
        <div class="logo"><h3>Abyssal Guild</h3></div>
        <div class="tri"></div>
        <a href="homepage.html">Home</a>
        <p style="margin-left: 20px; pointer-events: none;">></p>
        <a href="regform.html" style="margin-left: 20px;">Registration Form</a>
        <p style="margin-left: 20px; pointer-events: none;">></p>
        <p style="margin-left: 20px; pointer-events: none;">Registered Adventurers</p>
    </nav>
    <?php 
        include '../system/connection.php';
        // $query = "SELECT Full_name FROM tbl_students";
        $query = "SELECT * FROM tbl_students ORDER BY Full_Name ASC";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result); // Count the number of rows
    ?>
    <div id="registered_name_holder">
        <br><br>
        <div class="card">
            <div class="left-tri2"></div>
            <div class="left-tri"></div>
            <div class="box head">
                <h4>Registered Adventurer from our database</h4>
                <p style="font-weight: normal;">Total: <?php echo "$count";?></p>
            </div>
            <div class="right-tri"></div>
            <div class="right-tri2"></div>
        </div>
        <ol>
            <?php

                while ($row = mysqli_fetch_assoc($result)) {
                    $fullName = $row['Full_Name'];
                    echo '<div class="card">
                        <div class="circle"></div>
                        <div class="left-tri2"></div>
                        <div class="left-tri"></div>
                        <div class="box">
                            <p>' . $fullName . '</p>
                        </div>
                        <div class="right-tri"></div>
                        <div class="line"><li></li></div>
                        </div>';
                }

                mysqli_close($con);
            ?>
        </ol>
    </div>
</body>
</html>