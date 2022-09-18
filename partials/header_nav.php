<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
                <span>
                    Feane
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mx-auto ">
                    <li <?php if (!isset($_GET['p']) || $_GET['p'] == 'home') : ?> class="nav-item active" <?php else : ?> class="nav-item" <?php endif; ?>>
                        <a class=" nav-link" href="/?p=home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li <?php if (isset($_GET['p']) && $_GET['p'] == 'menu') : ?> class="nav-item active" <?php else : ?> class="nav-item" <?php endif; ?>>
                        <a class="nav-link" href="/?p=menu">Menu</a>
                    </li>
                    <li <?php if (isset($_GET['p']) && $_GET['p'] == 'about') : ?> class="nav-item active" <?php else : ?> class="nav-item" <?php endif; ?>>
                        <a class="nav-link" href="/?p=about">About</a>
                    </li>
                    <li <?php if (isset($_GET['p']) && $_GET['p'] == 'book') : ?> class="nav-item active" <?php else : ?> class="nav-item" <?php endif; ?>>
                        <a class="nav-link" href="/?p=book">Book Table</a>
                    </li>
                </ul>
                <div class="user_option">
                    <a href="" class="user_link" data-toggle="modal" data-target="#modalLoginForm">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </a>

                    <a class="cart_link" href="/?p=cart">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                </g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                        </svg>
                    </a>
                    <form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                    <a href="" class="order_online">
                        Order Online
                    </a>
                </div>
            </div>
        </nav>
    </div>
</header>

<!--Modal sign in-->
<form action="/login.php" method="POST">
    <div class="modal fade modal_login" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <?php
                if (isLogin()) {
                    $user = getCurrentUser();
                ?>
                    <h2 class="text-center">Hello, <?php echo $user['username']; ?></h2>
                    <a class="text-center link-dark" href="/logout.php" style="color: #565656;">Log out</a>

                <?php
                } else {
                ?>
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                            <input type="email" id="defaultForm-email" class="form-control validate" placeholder="name@example.com" name="email">

                        </div>

                        <div class="md-form mb-4">
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                            <input type="password" id="defaultForm-pass" class="form-control validate" placeholder="Password" name="password">

                        </div>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="1" name="remember" checked> Remember me
                            </label>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark">Sign in</button>
                    </div>
                    <div class="create text-center fs-2" style="margin-bottom: 15px; cursor: pointer;">
                        <a class="create__acc" href="" data-toggle="modal" data-target="#modalRegisterForm" data-dismiss="modal">Create account?</a>
                    </div>
                <?php
                }

                ?>

            </div>
        </div>
    </div>
</form>
<!--end Modal sign in-->

<!--Modal register-->
<form action="/register.php" method="POST">
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Register</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-4">
                        <label data-error="wrong" data-success="right" for="defaultForm-name">Name</label>
                        <input type="text" id="defaultForm-name" class="form-control validate" placeholder="Your name" name="name">

                    </div>

                    <div class="md-form mb-4">
                        <label data-error="wrong" data-success="right" for="defaultForm-phone">Phone number</label>
                        <input type="tel" id="defaultForm-phone" class="form-control validate" placeholder="123-4567-8901" name="phone">

                    </div>

                    <div class="md-form mb-4">
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Email</label>
                        <input type="email" id="defaultForm-pass" class="form-control validate" placeholder="Your e-mail" name="email">

                    </div>
                    <div class="md-form mb-4">
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Password</label>
                        <input type="password" id="defaultForm-pass" class="form-control validate" placeholder="Enter your new password" name="password">
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-dark">Register</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!--end Modal register-->