<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel="stylesheet" href="styles-desktop.css" media="screen and (min-width: 769px)">
    <link rel="stylesheet" href="styles-mobile.css" media="screen and (max-width: 768px)">
</head>

<body>
    <?php require('action.php'); ?>

    <header>
    </header>

    <header>
        <nav class="navbar">
            <div class="navbar-title">MY BIODATA</div>
        </nav>
    </header>

    <div class="container">
        <div class="left">
            <img class="image" src="<?php echo $images ?>" width="300" height="300">
            <h3><?php echo $name ?></h3>

            <div class="email">
                <p>Email: <?php echo $email ?></p>
            </div>
            <div class="phone">
            <p>Phone number: <?php echo $phone ?></p>
            </div>
            
        </div>

        <div class="column">
    <p class="info-line">IC Number: <?php echo $ic ?></p>
    <p class="info-line">Father's Name: <?php echo $father ?></p>
    <p class="info-line">Mother's Name: <?php echo $mother ?></p>
    <p class="info-line">Date of Birth: <?php echo $dob ?></p>
    <p class="info-line">Gender: <?php echo $gender ?></p>
    <p class="info-line">Hobbies: <?php echo $hobby ?></p>
    <p class="info-line">Address: <?php echo $address ?></p>
    <p class="info-line">Nationality: <?php echo $nationality ?></p>
    <p class="info-line">Language known: <?php echo $languageknown ?></p>
    <p class="info-line">Age: <?php echo $age ?></p>
</div>

    </div>
</body>

</html>