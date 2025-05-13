<?php
require "php/functions.php";
if (isset($_GET['name'])) {
    $name = urldecode($_GET['name']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is an example php app">
    <meta name="keywords" content="php, example">
    <link rel="icon" href="favicon.ico" type="image/ico">

    <link rel="stylesheet" href="css/styles.css">

    <title>Cat Details</title>


</head>

<body>
    <?php include "includes/nav.php" ?>
    <?php include "includes/header.php" ?>

    <main>
        <div class="row">
            <div class="column left">
                <div class="section-title">All About <?php echo $name ?></div>
            </div>

            <div class="column middle">
                <?php $selectedcat = getCatByName($name);
                if ($selectedcat) { ?>


                    <div class="selected-cat">

                        <img src="<?php echo "images/cats/{$selectedcat[0]['image']}" ?>">

                        <div class="name"><?php echo $selectedcat[0]['name'] ?></div>
                        <div class="selected-left">
                            <h3>About</h3>
                            <p class="description">
                                <?php echo $selectedcat[0]['description'] ?>
                            </p>
                        </div>
                        <div class="selected-right">
                            <p class="price">
                                $<?php echo $selectedcat[0]['price'] ?>
                            </p>
                        </div>
                        <div class="selected-button"><button>Buy This Cat!</button></div>

                    </div>
                <?php } ?>
            </div>
            <div class="column right"></div>
        </div>
    </main>

    <?php include "includes/footer.php" ?>
    <script src="javascript/script.js"></script>
</body>


</html>