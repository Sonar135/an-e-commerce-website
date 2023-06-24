<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/index.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="nav_container">
        <div class="nav">
                <div class="logo">
                    <img src="" alt="">
                </div>

                <ul class="links">
                   <li><a href="index.php?all_products">All products</a></li>
                   <li><a href="index.php?insert_products">insert product</a></li>
                   <li><a href="index.php?manage_categories">manage categories</a></li>
                   <li><a href="index.php?manage_brands">manage brands</a></li>
                </ul>
        </div>
    </div>

    <div class="section">

            <?php
                if(isset($_GET['all_products'])){
                    include 'all_products.php';
                }

              else if(isset($_GET['insert_products'])){
                    include 'insert_products.php';
                }
                else if(isset($_GET['manage_categories'])){
                    include 'manage_categories.php';
                }
                else if(isset($_GET['manage_brands'])){
                    include 'manage_brands.php';
                }
            ?>

    </div>

    <script src="js/dom.js"></script>
</body>
</html>