<body>
    <!--preloading-->
    <div id="preloader">
        <img class="logo" src="assets/images/logo1.png" alt="" width="119" height="58">
        <div id="status">
            <span></span>
            <span></span>
        </div>
    </div>
    <!--end of preloading-->
    <!--login form popup-->
    <div class="login-wrapper" id="login-content">
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>Login</h3>
            <form action="models/users/login.php" method="POST" onSubmit="return checkLogin();">
                <div class="row">
                    <label for="logemail">
                        Email:
                        <input type="text" name="logemail" id="logemail" placeholder="Hugh Jackman" required="required" />
                    </label>
                </div>

                <div class="row">
                    <label for="password">
                        Password:
                        <input type="password" name="logpassword" id="password" placeholder="******" required="required" />
                    </label>
                </div>
                <div class="row">
                    <div class="remember">
                        <a href="#">Forget password ?</a>
                    </div>
                </div>
                <div class="row">
                    <button type="button" name="btnLogin" id="btnLogin">Login</button>
                </div>
            </form>
            <div class="row">
                <p>Or via social</p>
                <div class="social-btn-2">
                    <a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
                    <a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
                </div>
            </div>
        </div>
    </div>
    <!--end of login form popup-->
    <!--signup form popup-->
    <div class="login-wrapper" id="signup-content">
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>sign up</h3>
            <form action="models/users/register.php" method="POST" onSubmit=" return checkRegister();">
                <div class="row">
                    <label for="username-2">
                        Username:
                        <input type="text" name="regusername" id="regusername" placeholder="Hugh Jackman" required="required" />
                    </label>
                </div>

                <div class="row">
                    <label for="email-2">
                        your email:
                        <input type="text" name="regemail" id="regemail" placeholder="" required="required" />
                    </label>
                </div>
                <div class="row">
                    <label for="password-2">
                        Password:
                        <input type="password" name="regpassword" id="regpassword" placeholder="" required="required" />
                    </label>
                </div>
                <div class="row">
                    <button type="submit" name="btnRegister" id="btnRegister">Register</button>
                </div>
            </form>
        </div>
    </div>
    <!--end of signup form popup-->

    <!-- BEGIN | Header -->
    <header class="ht-header">
        <div class="container">
            <nav class="navbar navbar-default navbar-custom">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header logo">
                    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <a href="index.php"><img class="logo" src="assets/images/logo1.png" alt="" width="119" height="58"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav flex-child-menu menu-left">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <?php
                        $nav = executeQuery("SELECT * FROM navigation");
                        foreach ($nav as $n) :
                            ?>
                            <li class="dropdown first">
                                <a href="<?= $n->src ?>" class="btn btn-default dropdown-toggle" title="" <?= $n->title ?>> <?= $n->text ?> </a>
                            </li>
                        <?php
                    endforeach;
                    ?>
                    </ul>
                    <ul class="nav navbar-nav flex-child-menu menu-right">
                        <!-- PHP kod za proveravanje sesije -->
                        <?php
                        if (isset($_SESSION['user'])) :
                            if ($_SESSION['user']->idRole == 1) :
                                ?>
                                <li><a href="index.php?p=admin">admin panel</a></li>
                            <?php
                        endif;
                        ?>
                            <span class="welcomeime">Welcome <?= $_SESSION['user']->username ?></span>
                            <li><a href="index.php?p=userprofile">profile</a></li>
                            <li class="btn"><a href="models/users/logout.php">logout</a></li>
                        <?php
                    else :
                        ?>
                            <li class="loginLink"><a href="#">LOG In</a></li>
                            <li class="btn signupLink"><a href="#">sign up</a></li>
                        <?php
                    endif;
                    ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <!-- top search form -->
            <div class="top-search">
                <select>
                    <option value="united">TV show</option>
                    <option value="saab">Others</option>
                </select>
                <input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for">
            </div>
        </div>
    </header>
    <!-- END | Header -->