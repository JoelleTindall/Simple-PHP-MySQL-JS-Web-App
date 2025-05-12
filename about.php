<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is an example php app">
    <meta name="keywords" content="php, example">

    <link rel="stylesheet" href="css/styles.css">

    <title>About Cats R Us</title>

</head>

<body id="about">
    <?php include "includes/nav.php" ?>
    <?php include "includes/header.php" ?>

    <main>
        <div class="row">
            <div class="column left">
                <h1>About Us</h1>

            </div>
            <div class="column middle">
                <h2>Who Are We?</h2>
                <p>This is the about page for our company. We sell cats, apparently.</p>
                <h2>Tell Me More..</h2>
                <p>
                    Here's some more text.
                    Here's even more text. Here's more text. Here's even more text. Here's more text.
                    Here's even more text. Here's more text. Here's even more text. Here's more text.
                    Here's even more text. Here's more text. Here's even more text. Here's more text.
                </p>
                <h2>Our Mission Statement</h2>
                <p>
                    Here's the last bit of text. You could put anything you want here! I am just going to put one more
                    line.

                </p>
            </div>
            <div class="column right">
                <figure>
                    <img src="images/bouncecat.gif">
                    <figcaption>This is our mascot</figcaption>
                    </img>
                </figure>
            </div>
        </div>
    </main>

    <?php include "includes/footer.php" ?>
    <script src="javascript/script.js"></script>
</body>


</html>