<?php require "php/functions.php" ?>

<?php
if (isset($_GET['category'])) {
    $cate = urldecode($_GET['category']);
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

    <title><?php echo $cate ?> Cats</title>


</head>

<body id="<?php echo $cate ?>">
    <?php include "includes/nav.php" ?>
    <?php include "includes/header.php" ?>

    <main>
        <div class="row">
            <div class="column left">
                <div class="section-title">Cat Categories</div>
                <?php $categories = getCategories() ?>
                <?php
                foreach ($categories as $category) {
                    ?>
                    <a class="catlink" data-active="<?php echo $category['category_name'] ?>"
                        href="category.php?category=<?php echo urlencode($category['category_name']) ?>">
                        <?php echo ucfirst($category['category_name']) ?>
                    </a>
                    <?php
                }
                ?>
            </div>

            <div class="column middle">
                <div class="section-title"><?php echo $cate ?> Cats</div>
                <?php $cats = getCatsByCategory($cate) ?>
                <div class="cat">
                    <?php
                    foreach ($cats as $cat) {
                        ?>
                        <div class="catholder">
                            <a href="cat.php?name=<?php echo urlencode($cat['name']) ?>">
                                <div class="img-name">
                                    <div>

                                        <img src="<?php echo "images/cats/{$cat['image']}" ?>">
                                        <p class="name">
                                            <?php echo $cat['name'] ?>
                                        </p>

                                    </div>
                                </div>
                                <div>

                                    <p class="description">
                                        <?php echo $cat['description'] ?>
                                    </p>
                                    <p class="price">
                                        $<?php echo $cat['price'] ?>
                                    </p>

                                </div>
                            </a>
                        </div>
                    <?php } ?>

                </div>
            </div>
            <div class="column right"></div>
        </div>
    </main>

    <?php include "includes/footer.php" ?>
    <script src="javascript/script.js"></script>
</body>


</html>