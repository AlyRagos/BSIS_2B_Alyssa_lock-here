<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliophile</title>
    <link rel="icon" href="./assets/Logo.svg">
    <link rel="stylesheet" href="./bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="top-header">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg d-flex align-items-center justify-content-between mb-2">
                <a class="navbar-brand wsm" href="index.php"><img src="./assets/Logo.svg" class="nav-logo" alt="logo"> Bibliography</a>
                <div class="search-wrapper d-flex align-items-center">
                    <div class="select-filter">
                        <select name="filter" class="filter-select">
                            <option value="">All Categories</option>
                            <option value="Fantasy">Fantasy</option>
                            <option value="Romance">Romance</option>
                            <option value="Romance">Adventure</option>
                            <option value="Romance">Mystery</option>
                            <option value="Romance">Poetry</option>
                            <option value="Romance">Fanfiction</option>
                            <option value="Romance">Horror</option>
                        </select>
                    </div>
                    <input type="text" placeholder="Search..." class="search-input">
                    <span class="search-btn material-symbols-outlined">Search</span>
                </div>
                <div class="login-signup wsm d-flex align-items-center justify-content-end">
                <a href="./signup.php" class="signup-btn">Logout</a>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <div class="link-wrapper d-flex align-items-center justify-content-between w-100">
                    <ul class="navbar-nav wsm">
                        <li class="nav-item">
                            <a class="nav-link" href="./new-arrivals.php">New Arrivals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./collection.php">Collection</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav gap-4">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="order.php">Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./category.php">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./orders.php">Orders</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav wsm justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link material-symbols-outlined" href="./wishlist.php">favorite</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link material-symbols-outlined" href="./shopping-cart.php">shopping_bag</a>
                        </li>
                    </ul>
                </div>
                </div>
            </nav>
        </div>
    </header>
    <section class="hero-section">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./assets/pexels-nubia-navarro-(nubikini)-1517355.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./assets/pexels-ready-made-3847646.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./assets/pexels-leah-kelley-373465.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
        <div class="overlay">
            <h1 class="text-uppercase">There are things that only<br> books can fulfill.</h1>
            <p>This is a online community for readers and writers. Discover latest and most popular releases of books. Read, Write and stay relax.</p>
            <a href="./books.php">Shop Now</a>
        </div>
    </section>
    <div class="container my-5">
        <div class="row align-items-center book-service-row">
            <div class="col-sm-12 col-md-6 col-lg-3 book-service">
                <div class="d-flex">
                    <div>
                        <p>The best book to give this year.</p>
                        <p>Get Collection for All</p>
                    </div>
                    <span class="icon material-symbols-outlined">star</span>
                </div>
                <a href="#">Get this books <span class="material-symbols-outlined">arrow_forward</span></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 book-service">
                <div class="d-flex">
                    <div>
                        <p>Get the premium books released.</p>
                        <p>Add it to your Collections</p>
                    </div>
                    <span class="icon material-symbols-outlined">workspace_premium</span>
                </div>
                <a href="#">Get this books <span class="material-symbols-outlined">arrow_forward</span></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 book-service">
                <div class="d-flex">
                    <div>
                        <p>The best book to give this year.</p>
                        <p>Get Collection for All</p>
                    </div>
                    <span class="icon material-symbols-outlined">favorite</span>
                </div>
                <a href="#">Get this books <span class="material-symbols-outlined">arrow_forward</span></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 book-service">
                <div class="d-flex">
                    <div>
                        <p>Get the premium books released.</p>
                        <p>Add it to your Collections</p>
                    </div>
                    <span class="icon material-symbols-outlined">bookmark_added</span>
                </div>
                <a href="#">Get this books <span class="material-symbols-outlined">arrow_forward</span></a>
            </div>
        </div>
    </div>
    <div class="container best-new">
        <h2 class="book-heading">Best Seller Books</h2>
        <p class="book-subheading">Get The Best Books Right Now</p>
        <div class="row my-5">
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="book">
                    <a href="#" class="add-to-collections material-symbols-outlined">favorite</a>
                    <img src="./assets/ft1.jpg" alt="book image">
                    <div class="book-overlay">
                        <a href="./add-to-cart.php">Get this book</a>
                    </div>
                </div>
                <a href="./view-book.php" class="view-book-link">The White Raven</a>
                <p class="book-price">???590.00</p>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="book">
                    <a href="#" class="add-to-collections material-symbols-outlined">favorite</a>
                    <img src="./assets/yey.png" alt="book image">
                    <div class="book-overlay">
                        <a href="./add-to-cart.php">Get this book</a>
                    </div>
                </div>
                <a href="./view-book.php" class="view-book-link">The Dying Detective</a>
                <p class="book-price">???500.00</p>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="book">
                    <a href="#" class="add-to-collections material-symbols-outlined">favorite</a>
                    <img src="./assets/ft2.jpg" alt="book image">
                    <div class="book-overlay">
                        <a href="./add-to-cart.php">Get this book</a>
                    </div>
                </div>
                <a href="./view-book.php" class="view-book-link">Fantasy Flight</a>
                <p class="book-price">???945.00</p>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="book">
                    <a href="#" class="add-to-collections material-symbols-outlined">favorite</a>
                    <img src="./assets/h.jpg" alt="book image">
                    <div class="book-overlay">
                        <a href="./add-to-cart.php">Get this book</a>
                    </div>
                </div>
                <a href="./view-book.php" class="view-book-link">The Warrior Game</a>
                <p class="book-price">???600.00</p>
            </div>
        </div>
        <a href="#" class="view-all-books">View Best Seller Books</a>
    </div>
    <div class="container best-new">
        <h2 class="book-heading">New Arrival Books</h2>
        <p class="book-subheading">Get The Newly Arrival Books Right Now</p>
        <div class="row my-5">
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="book">
                    <a href="#" class="add-to-collections material-symbols-outlined">favorite</a>
                    <img src="./assets/hp1.png" alt="book image">
                    <div class="book-overlay">
                        <a href="./add-to-cart.php">Get this book</a>
                    </div>
                </div>
                <a href="./view-book.php" class="view-book-link">Harry Potter</a>
                <p class="book-price">???1300.00</p>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="book">
                    <a href="#" class="add-to-collections material-symbols-outlined">favorite</a>
                    <img src="./assets/Scars and Heart.jpg" alt="book image">
                    <div class="book-overlay">
                        <a href="./add-to-cart.php">Get this book</a>
                    </div>
                </div>
                <a href="./view-book.php" class="view-book-link">Scars and Heart</a>
                <p class="book-price">???1000.00</p>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="book">
                    <a href="#" class="add-to-collections material-symbols-outlined">favorite</a>
                    <img src="./assets/The Scars Inside Me.jpg" alt="book image">
                    <div class="book-overlay">
                        <a href="./add-to-cart.php">Get this book</a>
                    </div>
                </div>
                <a href="./view-book.php" class="view-book-link">The Scars Inside Me</a>
                <p class="book-price">???500.00</p>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="book">
                    <a href="#" class="add-to-collections material-symbols-outlined">favorite</a>
                    <img src="./assets/kissing.jpg" alt="book image">
                    <div class="book-overlay">
                        <a href="./add-to-cart.php">Get this book</a>
                    </div>
                </div>
                <a href="./view-book.php" class="view-book-link">Kissing in the Crows Nest</a>
                <p class="book-price">???500.00</p>
            </div>
        </div>
        <a href="#" class="view-all-books">View Newly Arrival Books</a>
    </div>

    <script src="./bootstrap/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>
</html>