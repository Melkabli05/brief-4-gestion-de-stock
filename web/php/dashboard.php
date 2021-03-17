<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboars.css">
    <link href="fontawesome-free-5.15.2-web/css/all.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--load all styles -->

</head>

<body>

<?php
    include 'connex.php';
    $product = readProduct();
    var_dump($product)
?>
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
                <li class="sidenav__list-item"><i class="fas fa-home"></i><a href="#">Home</a></li>
                <li class="sidenav__list-item"><i class="fas fa-plus-circle"></i><a href="add.html">Add</a></li>
                <li class="sidenav__list-item"><i class="fas fa-user"></i><a href="#">Profile</a></li>
                <li class="sidenav__list-item"><i class="fas fa-cog"></i><a href="#">Setting</a></li>
            </ul>
        </aside>

        <main class="main">
            <div class="main-header">
                <div class="main-header__heading">
                    <h2>welcome <span>mensieur</span></h2>
                </div>
                <div class="main-header__updates"></div>
            </div>

            <div class="main-overview">
                <div class="overviewcard">
                    <div class="overviewcard__icon"><i class="fas fa-dollar-sign"></i></div>
                    <div class="overviewcard__info">
                        <h3>Total income <span>9000$</span></h3>
                    </div>
                </div>
                <div class="overviewcard">
                    <div class="overviewcard__icon"><i class="fas fa-dollar-sign"></i></div>
                    <div class="overviewcard__info">
                        <h3>Total income <span>9000$</span></h3>
                    </div>
                </div>
                <div class="overviewcard">
                    <div class="overviewcard__icon"><i class="fas fa-dollar-sign"></i></div>
                    <div class="overviewcard__info">
                        <h3>Total income <span>9000$</span></h3>
                    </div>
                </div>
                <div class="overviewcard">
                    <div class="overviewcard__icon"><i class="fas fa-dollar-sign"></i></div>
                    <div class="overviewcard__info">
                        <h3>Total income <span>9000$</span></h3>
                    </div>
                </div>
            </div>

            <div class="main-cards">
                <div class="card">
                    <table>
                        <tbody>
                            <tr>
                                <th class="first">
                                    <input class="checkbox" type="checkbox">
                                </th>
                                <th class="id">Id</th>
                                <th>Image</th>
                                <th class="product-name">Name</th>
                                <th class="price">Price</th>
                                <th class="Category">Category</th>
                                <th class="description">description</th>
                                <th class="quantity">quantity</th>
                                <th class="edit">edit</th>
                                <th class="last"></th>
                            </tr>
                            <tr>
                                <td class="first">
                                    <input class="checkbox" type="checkbox">
                                </td>
                                <td class="id">#1</td>
                                <td>
                                    <img data-modal-target="#modal" class="product-img" src="../img/product.jfif"
                                        alt="pizza">
                                </td>
                                <td data-modal-target="#modal" class="product-name">name</td>
                                <td class="price">price</td>
                                <td class="Category">Category</td>
                                <th class="description">description</th>
                                <td class="quantity">quantity</td>
                                <td class="edit">
                                    <div class="edit-icon">
                                        <a href="edit.html"><i class="fas fa-edit"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                </td>
                                <td class="last">
                                    <button data-modal-target="#modal" class="view-btn">View</button>
                                </td>
                            </tr>






                        </tbody>
                    </table>
                </div>

            </div>
        </main>



        <div class="modal" id="modal">
            <div class="modal-header">
                <div class="title">Product info</div>
                <button data-close-button class="close-button">&times;</button>
            </div>
            <div class="modal-body">
                <div class="modal-img"><img
                        src="https://i.pinimg.com/originals/a9/10/e9/a910e9c382bdfeefb8249e9d6df8fcf8.jpg" alt="pizza"
                        height="100%" width="215px"></div>
                <div class="modal-text">
                    <H2 class="product-title">Product name</H2>

                    <div class="modal-text-popup">
                        <H4 class="details">category </H4>
                        <h4 class="details">quantity</h4>
                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit reiciendis quis accusantium
                        corporis quos, doloribus optio fuga dicta sapiente placeat iure odio! Accusamus sapiente labore
                        consectetur tenetur. Veniam, est minus.</p>
                    <H2 class="price">120$</H2>
                </div>
            </div>
        </div>
        <div id="overlay"></div>




        <footer class="footer">
            <div class="footer__copyright">&copy; 2021 El-kabli</div>
            <div class="footer__signature">copyright © 2021 all rights reserved</div>
        </footer>
    </div>
    <script src="main.js"></script>
    <script src="script.js"></script>
    
</body>

</html>