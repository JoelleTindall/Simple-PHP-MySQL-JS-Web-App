<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is an example php app">
    <meta name="keywords" content="php, example">

    <link rel="stylesheet" href="css/styles.css">

    <title>Contact Us</title>

</head>

<body id="contact">
    <?php include "includes/nav.php" ?>
    <?php include "includes/header.php" ?>

    <main>

        <div class="row">
            <div class="column left">
                <h1>Lets Talk</h1>
                <div style="text-align:center; padding-top:10px;">
                    <p>There's a few ways to get ahold of us.</p>
                </div>
            </div>
            <div class="column middle">
                <h2 style="padding-bottom:30px;">Want to get ahold of us?</h2>

                <h3 style="padding:30px;">Phone:
                    <h3 />
                    <a href="#">(513) 555-5555</a>
                    <h3 style="padding:30px;">Email:
                        <h3 />
                        <a href="#">fake@fakeemail.com</a>

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