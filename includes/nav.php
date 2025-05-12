<nav class="mobile">
    <div class="brand">Cats R Us</div>
    <span class="menuBtn">
        <img src="images/hamburger.png" alt="Toggle Button">
    </span>
    <ul id="navigation-list" class="links">
        <li> <a data-active="index" href="index.php">Home</a></li>
        <li> <a data-active="about" href="about.php">About</a></li>
        <li> <a data-active="contact" href="contact.php">Contact</a></li>
    </ul>
</nav>

<nav class="full">
    <div class="brand">Cats R Us</div>
    <div class="links">
        <a data-active="index" href="index.php">Home</a>
        <a data-active="about" href="about.php">About</a>
        <a data-active="contact" href="contact.php">Contact</a>
    </div>
</nav>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
    jQuery(document).ready(function ($) {
        // hide the menu when the page load
        $("#navigation-list").hide();
        // when .menuBtn is clicked, do this
        $(".menuBtn").click(function () {
            // open the menu with slide effect
            $("#navigation-list").slideToggle(300);
        });
    });
</script>