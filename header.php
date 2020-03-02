<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand" href="house.php">Housing</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="house.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            --><php
<!--//            session_start();-->
//            if(isset($_SESSION['hao'])){
//                echo '
                <li class="nav-item">
                <a class="nav-link" href="logout2.php">Logout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="rent.php">Rent</a>
            </li>
            <li class="nav-item">
                 <a class="nav-link" href="account.php">Account</a>
            </li>
<!--                ';-->
<!--            }else{-->
<!--                echo'-->
               <li class="nav-item">
             <a class="nav-link" href="login2.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign up</a>
            </li>

<!--                            ';-->
<!--            }-->
<!--            ?>-->
            <li class="nav-item">
                <a  class="nav-link" href="#">Contact Us</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<!--end navbar-->
