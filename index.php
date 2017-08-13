<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webshop/Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Webshop</a>
        </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="store.php">Store</a></li>
                <li><a href="cart.php">Shopping cart</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Log in</a></li>
            </ul>

        </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="images/image1.jpg" alt="">
        </div>

        <div class="item">
            <img src="images/image2.jpg" alt="">
        </div>

        <div class="item">
            <img src="images/image3.jpg" alt="">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h3>Fashion</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at, consequuntur dignissimos earum eveniet exercitationem explicabo illo perferendis perspiciatis rem reprehenderit similique ut voluptates. Ad aliquid eaque nostrum odit repellendus!</p>
            <a href="fashion.php" class="btn btn-info">Read more</a>
        </div>
        <div class="col-sm-4">
            <h3>Make up</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aspernatur ea, eum illo impedit laudantium magnam provident quas qui recusandae reiciendis rem reprehenderit repudiandae sapiente tempora ullam, velit vitae voluptate.</p>
            <a href="makeup.php" class="btn btn-info">Read more</a>
        </div>
        <div class="col-sm-4">
            <h3>Manicure&Hair</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda blanditiis consequuntur hic laborum mollitia officia quas quasi quia ratione veritatis! Cum dolorum, expedita ipsum molestiae neque pariatur perspiciatis quas sit.</p>
            <a href="manicure.php" class="btn btn-info">Read more</a>
        </div>

    </div>
</div>







<footer class="container-fluid text-center">
    <p>&copy; 2017 Carmen Oprea</p>
    <p>Sitemap Support</p>

</footer>


</body>

</html>

