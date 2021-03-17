<?php
include ("connexion.php"); 

if(isset($POST['submit'])){
    $name = htmlspecialchars(trim(strtolower ($POST['product_category'])));
    $category = htmlspecialchars(trim(strtolower ($POST['product_name'])));
    $quantity = htmlspecialchars(trim(strtolower ($POST['product_quantity'])));
    $price = htmlspecialchars(trim(strtolower ($POST['product_price'])));
    $description = htmlspecialchars(trim(strtolower ($POST['product_description'])));
    $image = htmlspecialchars(trim(strtolower ($POST['product_image'])));
    $query = "INSERT INTO product(Image,Name,Price,Category,quantity,Description)VALUES('$image','$name','$price','$category','$quantity','$description')";
    mysqli_query($con,$query);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <link rel="stylesheet" href="dashboars.css">
    <link href="fontawesome-free-5.15.2-web/css/all.css" rel="stylesheet">
    <!--load all styles -->

</head>

<body>
    <div class="grid-container">
        <div class="menu-icon">
            <i class="fas fa-bars header__menu"></i>
        </div>

        <header class="header">
            <div class="header__search"><input type="search" placeholder="Search ..."></div>
            <div class="header__avatar">
                <img src="profile.jpg" alt="profile">
            </div>
        </header>

        <aside class="sidenav">
            <div class="sidenav__close-icon">
                <i class="fas fa-times sidenav__brand-close"></i>
            </div>
            <ul class="sidenav__list">
                <li class="sidenav__list-item"><i class="fas fa-home"></i><a href="dashboard.html">Home</a></li>
                <li class="sidenav__list-item"><i class="fas fa-plus-circle"></i><a href="#">Add</a></li>
                <li class="sidenav__list-item"><i class="fas fa-user"></i><a href="#">Profile</a></li>
                <li class="sidenav__list-item"><i class="fas fa-cog"></i><a href="#">Setting</a></li>
            </ul>
        </aside>

        <main class="main">
            <div class="main-cards">
                <div class="card">
                    <!-- add product form -->
                    <div class="title">New product</div>
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="user-details">
                                <div class="form-box">
                                   
                                    <div class="input-box">
                                        <span class="details">Product name</span>
                                        <input type="text" name="product_name" placeholder="Enter product name" required>
                                    </div>
                                    <div class="input-box">
                                        <span class="details">Category</span>
                                        <input type="text" name="product_category" placeholder="Enter product Category" required>
                                    </div>
                                    <div class="input-box">
                                        <span class="details">quantity</span>
                                        <input type="number" name="product_quantity" placeholder="Enter product quantity" required>
                                    </div>
                                    <div class="input-box">
                                        <span class="details">Price</span>
                                        <input type="number" name="product_price" placeholder="Enter product price $" required>
                                    </div>
                                </div>
                                <div class="textarea-box">
                                    <span class="details">description</span>
                                    <textarea name="description" name="product_description" id="description" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="button">
                                <input class="submit" type="submit" value="Add product"> 
                                <input type="file" name="product_image" id="upload" hidden/>
                                <label class="upload" for="upload">Choose file</label>
                            </div>
                        </form>




                    <!-- end of add product form -->
                </div>
            </div>
        </main>

        <footer class="footer">
            <div class="footer__copyright">&copy; 2021 El-kabli</div>
            <div class="footer__signature">copyright © 2021 all rights reserved</div>
        </footer>
    </div>
    <script src="main.js"></script>
</body>

</html>