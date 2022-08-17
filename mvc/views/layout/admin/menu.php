<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Blogs</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="http://localhost/mvc_php/category">Category</a></li>
            <li><a href="http://localhost/mvc_php/post">Posts</a></li>
            <li><a href="http://localhost/mvc_php/Account">Account</a></li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
            <?php
            if (isset($_SESSION['account'])) {
            ?>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin:
                        <?php
                        foreach ($_SESSION['account'] as $key => $value) {
                            echo $value["fullname"];
                        }
                        ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://localhost/mvc_php/Account/logout">Logout</a></li>
                    </ul>
                </li>

            <?php
            } else {
            ?>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Login <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://localhost/mvc_php/Account/login">Login</a></li>
                        <li><a href="http://localhost/mvc_php/Account/register">Register</a></li>
                    </ul>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
</nav>