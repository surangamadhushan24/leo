
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="logo" src="leoLogo.jpg" alt="">
            <p class="logo-name">BgLeos</p>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item active">
                    <a class="nav-link mx-2" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#">NewsLetter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="leaders.php">Our Leaders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#">Donation</a>
                </li>

                <?php if (!isset($_SESSION["name"])) : ?>
                    <li class="nav-item">
                    <a class="nav-link mx-2 signup-link" href="signup.php"> join Us</a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link mx-2 signin-link" href="signin.php">Sign In</a>
                   </li>
                <?php else : ?>
                    <li class= "nav-item"><a class="nav-link mx-2 signin-link" href="logout.php">Logout</a></li>
                <?php endif; ?>

                
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#">Contact Us</a>
                </li>
                <!-- <li class="nav-item dropdown">
                        <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Company
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Blog</a></li>
                            <li><a class="dropdown-item" href="#">About Us</a></li>
                            <li><a class="dropdown-item" href="#">Contact us</a></li>
                        </ul>
                    </li> -->
            </ul>
        </div>
    </div>
</nav>