<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FleetControl</title>
    <link rel="stylesheet" href="public/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="public/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <div class="container text-center">
        <div class="row">
            <h1>Welcome to FleetControl</h1>
        </div>
    </div>
</header>
<article>
    <div class="row">
        <div class="col-4" id="img">
            <img class="img-fluid" src="public/img/Truck_368x368.jpg" alt="image of a truck">
        </div>
        <div class="col-8" id="content">
            <hr>
            <h2>FleetControl</h2>
            <hr>
            <h3>Your Online Vehicle Management System</h3>
            <hr>
            <p>Please log in to view or add information about your vehicles.</p>
            <hr>
            <form action="/FleetControl/_private/authenticate.php" method="post">
                <label for="username">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" name="username" placeholder="Username" id="username" required>
                <label for="password">
                    <i class="fas fa-lock"></i>
                </label>
                <input type="password" name="password" placeholder="Password" id="password" required>
                <input type="submit" value="Login">
            </form>
            <hr>
        </div>
    </div>
</article>
<footer class="bg-dark link-light">
    <div>
        <!-- Social media and contact links. Add or remove any networks. -->
        <ul>
            <li><a href="mailto:paulmsummitt@gmail.com"><img src="https://res.cloudinary.com/dhfzm8v7y/image/upload/v1656777427/images/opened-email-envelope_icon-icons.com_70656_gx2u5j.png" style="color: white" title="e-mail" width="20px" height="20px">paulmsummitt@gmail.com</a></li>
            <li><a href="http://paulmsummitt.wordpress.com" target="_blank" rel="noopener"><img src="https://res.cloudinary.com/dhfzm8v7y/image/upload/v1656800093/images/104474_wordpress_blog_icon_yxsxrt.png" style="color: white" title="WordPress"  width="20px" height="20px">paulmsummitt.wordpress.com</a></li>
            <li><a href="https://www.linkedin.com/in/paul-m-summitt/" target="_blank" rel="noopener">
                    <img src="https://res.cloudinary.com/dhfzm8v7y/image/upload/v1656777431/images/LinkedIn_Rounded_icon-icons.com_61573_fhhjjs.png" style="color: white" title="LinkedIn"  width="20px" height="20px">LinkedIn</a></li>
        </ul>
    </div>
    <p id="textbottom">&copy; <?php echo date('Y'); ?> Paul M. Summitt</p>
    </div>
</footer>
</body>
</html>