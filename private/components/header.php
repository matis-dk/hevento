<?php

    $urlPath = WWW_ROOT . 'public/pages'

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hevento</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/hevento/public/assets/css/style.css">
    </head>
    <body>
        <header>
            <div id="header-container">
                <div id="header-logo">
                    <a href="/hevento/public/index.php"><svg class="hevento-logo" data-name="Lag 1" xmlns="http://www.w3.org/2000/svg" height="50.3" viewBox="0 0 191.7 65.3"><title>Logo</title><path d="M67.7,19.6" transform="translate(-2.8 -5.7)" /><path d="M69.6,19.1a52.1,52.1,0,0,1,4,3.7c-.3.6-6-1.5-6.7-1.7l-3.6-1.3a87.4,87.4,0,0,0-17.7-4.7C50.4,12,57,12.6,62,14.6A39.9,39.9,0,0,1,69.6,19.1Z" transform="translate(-2.8 -5.7)" /><path d="M67,17.4" transform="translate(-2.8 -5.7)" /><path d="M65.4,20.5" transform="translate(-2.8 -5.7)" /><path d="M64.7,18.8" transform="translate(-2.8 -5.7)" /><path d="M72.2,39.6c-2.1-2.5-4.1-5-5.9-7.6s-3.1-5.5-5.6-7c2.5-.4,4.9,1.5,6.7,3a32.5,32.5,0,0,1,5,5.1,40.2,40.2,0,0,1,4,6.2c.6,1.2,1.2,2.3,1.7,3.5s1.4,2.7,1.1,3.3A58.1,58.1,0,0,1,72.2,39.6Z" transform="translate(-2.8 -5.7)" /><path d="M3.2,46.3" transform="translate(-2.8 -5.7)" /><path d="M3.4,45.8c1.1-2,2.7-3.4,3.9-5.2s1.5-4,2.1-6.2c1.1-4.4,2-9.3,4.2-13.3a18.3,18.3,0,0,1,3.6-4.6,9.4,9.4,0,0,1,2.6-1.8c.9-.4,1.8-.3,2.4-1a15.8,15.8,0,0,1,2-2.1,15.2,15.2,0,0,1,2.6-1.2,3.4,3.4,0,0,0,1.7-2A7.7,7.7,0,0,0,29,7.1c.1-.3-.1-1.2.2-1.4,2.7,2.6,3.7,5.9,2.3,9.4,8-.8,16,.6,22.7,5.1a22.6,22.6,0,0,1,7.7,7.7c1.9,3.5,2.7,7.6,3.6,11.5a25.5,25.5,0,0,0,4.9,10.5c.2.3,1,1,1.1,1.4s-.8,1.2-1.2,1.5a20.4,20.4,0,0,1-5,3.1,45.8,45.8,0,0,1-9.9,2.9c-2.6.5-5.2.6-7.9.9a33.2,33.2,0,0,0-11.5,2.9,17.6,17.6,0,0,0-5,3.4,11.4,11.4,0,0,0-1.8,2.5,8.1,8.1,0,0,0-.6,1.3c-.1.2-.3,1.5-.4,1.4s-.1-2.8,0-3.3A39.3,39.3,0,0,1,29.6,63a29.9,29.9,0,0,1,4.1-7.5c2.9-4.3,6.5-9.8,3.4-14.9a5.6,5.6,0,0,0-2.7-2.4c-1.6-.6-2.7,0-3.9,1a17.5,17.5,0,0,1-3.2,2.4,24.1,24.1,0,0,1-4,1.4c-2.6.9-4.7,3.4-6.2,5.7s-2.5,5-4.6,6.9C7,60.9,2.1,52.4,2.9,47.2" transform="translate(-2.8 -5.7)" /><path d="M43.2,12.7" transform="translate(-2.8 -5.7)" /><path d="M45.8,12.3" transform="translate(-2.8 -5.7)" /><path d="M45.9,8.1c4.6-.2,10.3,1.1,13.4,4.8.1.2-.9,0-1,0l-2.4-.4a49.2,49.2,0,0,0-5.4-.4,47.5,47.5,0,0,0-5.4.4l-4.6.5-2.8.3-2.7.2a6.8,6.8,0,0,1-2.5,0A36.4,36.4,0,0,1,42.7,8.6" transform="translate(-2.8 -5.7)" /><path d="M44,8.4" transform="translate(-2.8 -5.7)" /><path d="M64.4,21.7c.3-.1.6-.5,1-.1" transform="translate(-2.8 -5.7)" /><path d="M66,21.9a20.8,20.8,0,0,1,5.1,4.8,25,25,0,0,1,2,2.9c.2.4,1.7,2.6,1.5,2.8S64,24.9,62.9,24.1s-4.1-2.8-6.2-4c-.2-.1-2.2-1-1.9-1.3s2.8,0,3.4.1A20.6,20.6,0,0,1,66,21.9Z" transform="translate(-2.8 -5.7)" /><path d="M73.7,43.9a27.4,27.4,0,0,0,3.9,4.5l2.1,2c.6.5,2,1.3,2.3,2s-4-.8-4.9-1.2a16.9,16.9,0,0,1-5.3-4,28.9,28.9,0,0,1-6.2-11.5c.6-.4,5,4.6,5.6,5.3Z" transform="translate(-2.8 -5.7)" /><path d="M106.8,49.1H103V40.3H93.5v8.8H89.7V28.9h3.8v8.7H103V28.9h3.8Z" transform="translate(-2.8 -5.7)" /><path    d="M116.6,34.5a7,7,0,0,1,2.5.4,5.5,5.5,0,0,1,2,1.3,5.8,5.8,0,0,1,1.3,2,7.7,7.7,0,0,1,.5,2.8,5,5,0,0,1,0,.7v.4l-.2.2h-9.3a4.9,4.9,0,0,0,1.2,3.2,3.7,3.7,0,0,0,2.7,1l1.4-.2,1.1-.4.8-.4.7-.2h.4l.3.2,1,1.3a5.8,5.8,0,0,1-1.3,1.1l-1.5.7-1.6.4h-1.6a7.7,7.7,0,0,1-2.8-.5,6.2,6.2,0,0,1-2.2-1.5,6.9,6.9,0,0,1-1.5-2.4,9.3,9.3,0,0,1-.5-3.3,7.9,7.9,0,0,1,.5-2.8,6.6,6.6,0,0,1,1.4-2.3,6.4,6.4,0,0,1,2.2-1.5A7.1,7.1,0,0,1,116.6,34.5Zm.1,2.5a3.2,3.2,0,0,0-2.4.9,4.2,4.2,0,0,0-1.1,2.4h6.5a4.3,4.3,0,0,0-.2-1.3,2.9,2.9,0,0,0-.6-1,2.7,2.7,0,0,0-1-.7Z" transform="translate(-2.8 -5.7)" /><path d="M132.4,49.1h-3.1l-5.7-14.4h2.9l.6.2a.9.9,0,0,1,.4.5l2.8,7.7.4,1.3.3,1.3.3-1.3.4-1.3,2.8-7.7a.9.9,0,0,1,.4-.5l.6-.2h2.7Z" transform="translate(-2.8 -5.7)" /><path d="M145.6,34.5a7,7,0,0,1,2.5.4,5.5,5.5,0,0,1,2,1.3,5.8,5.8,0,0,1,1.3,2,7.7,7.7,0,0,1,.5,2.8,5,5,0,0,1,0,.7v.4l-.2.2h-9.3a4.9,4.9,0,0,0,1.2,3.2,3.7,3.7,0,0,0,2.7,1l1.4-.2,1.1-.4.8-.4.7-.2h.4l.3.2,1,1.3a5.8,5.8,0,0,1-1.3,1.1l-1.5.7-1.6.4h-1.6a7.7,7.7,0,0,1-2.8-.5,6.2,6.2,0,0,1-2.2-1.5,6.9,6.9,0,0,1-1.5-2.4,9.3,9.3,0,0,1-.5-3.3,7.9,7.9,0,0,1,.5-2.8,6.6,6.6,0,0,1,1.4-2.3,6.4,6.4,0,0,1,2.2-1.5A7.1,7.1,0,0,1,145.6,34.5Zm.1,2.5a3.2,3.2,0,0,0-2.4.9,4.2,4.2,0,0,0-1.1,2.4h6.5a4.3,4.3,0,0,0-.2-1.3,2.9,2.9,0,0,0-.6-1,2.7,2.7,0,0,0-1-.7Z" transform="translate(-2.8 -5.7)" /><path d="M154.6,49.1V34.7h2.1a.8.8,0,0,1,.9.6l.2,1.1.9-.8,1-.6,1.2-.4h1.3a5.2,5.2,0,0,1,2.1.4,4.1,4.1,0,0,1,1.5,1.1,4.9,4.9,0,0,1,.9,1.7,7.3,7.3,0,0,1,.3,2.2v9.1h-3.5V40a3.1,3.1,0,0,0-.6-2,2.3,2.3,0,0,0-1.8-.7,3.6,3.6,0,0,0-1.7.4,6,6,0,0,0-1.5,1.1V49.1Z" transform="translate(-2.8 -5.7)" /><path d="M175.2,49.3a3.8,3.8,0,0,1-2.9-1.1,4.1,4.1,0,0,1-1-2.9v-8h-1.5l-.5-.2a.7.7,0,0,1-.2-.5V35.2l2.3-.4.7-3.9a.7.7,0,0,1,.3-.4l.5-.2h1.8v4.5h3.8v2.5h-3.8v7.8a1.5,1.5,0,0,0,.3,1.1,1.1,1.1,0,0,0,.9.4h.5l.4-.2.3-.2h.5l.2.2,1,1.7a5.2,5.2,0,0,1-1.7,1A6.5,6.5,0,0,1,175.2,49.3Z" transform="translate(-2.8 -5.7)" /><path d="M187.5,34.5a7.9,7.9,0,0,1,2.9.5,6.3,6.3,0,0,1,2.2,1.5,6.5,6.5,0,0,1,1.4,2.3,9.6,9.6,0,0,1,0,6.1,6.6,6.6,0,0,1-1.4,2.3,6.2,6.2,0,0,1-2.2,1.5,8.5,8.5,0,0,1-5.8,0,6.3,6.3,0,0,1-2.2-1.5,6.7,6.7,0,0,1-1.4-2.3,9.5,9.5,0,0,1,0-6.1,6.5,6.5,0,0,1,1.4-2.3,6.4,6.4,0,0,1,2.2-1.5A7.9,7.9,0,0,1,187.5,34.5Zm0,12.1a3,3,0,0,0,2.7-1.2,6,6,0,0,0,.9-3.5,6.1,6.1,0,0,0-.9-3.5,3,3,0,0,0-2.7-1.2,3.1,3.1,0,0,0-2.7,1.2,6.1,6.1,0,0,0-.9,3.5,6,6,0,0,0,.9,3.5A3.1,3.1,0,0,0,187.5,46.6Z" transform="translate(-2.8 -5.7)" /></svg></a>
                </div>
                <nav id="header-navigation">
                    <?php
                    if ($_SESSION['userSignin']) {
                        echo   "<ul id='header-navigation-list'>
                                    <li><a class='hnl-items' href='/hevento/public/pages/events.php'>Events</a></li>
                                    <li><a class='hnl-items' href='#'>Explore</a></li>
                                    <li><a class='hnl-items hnl-seprator' href='#'>|</a></li>
                                    <li class='hnl-items hnl-hideborder hnl-dropdown-container' id='hnl-user-menu'>
                                        <figure>
                                            <svg version='1.1' class='hnl-user-icon' mlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                            	viewBox='0 0 40 40' style='enable-background:new 0 0 40 40;' xml:space='preserve'>
                                                <path d='M20,1.9C10,1.9,1.9,10,1.9,20S10,38.1,20,38.1c10,0,18.1-8.1,18.1-18.1S30,1.9,20,1.9z M15.1,16.6L15.1,16.6
                                            	c0.2-0.1,0.3-0.3,0.2-0.5c-0.4-2.2-0.1-3.1,0-3.3c0.6-2,2.6-2.9,3-3c0.1,0,0.2-0.1,0.4-0.1l0,0l0.3,0l0,0l0.1,0c0.1,0,0.1,0,0.2,0
                                            	l0.1,0c0.1,0,0.8,0.1,2,0.5l0.8,0.3c1.5,0.4,2.1,1.2,2.3,1.4c1.2,1.3,0.9,3.3,0.6,4.4c0,0.1,0,0.3,0.1,0.4l0.1,0.1
                                            	c0.1,0.1,0.2,0.6-0.1,1.5c0,0.3-0.2,0.5-0.3,0.7c-0.1,0.1-0.1,0.1-0.1,0.2c-0.4,2.3-2.5,4.9-4.7,4.9c-1.9,0-4-2.4-4.4-4.9
                                            	c0-0.1-0.1-0.2-0.1-0.3c-0.2-0.2-0.3-0.4-0.3-0.8C14.9,17.3,14.9,16.8,15.1,16.6L15.1,16.6z M10.9,26.7c0.1-0.1,0.5-0.6,1.4-1
                                            	c0.8-0.2,2.8-0.9,3.9-1.7c0.1,0,0.1-0.1,0.1-0.1c0.1-0.1,0.3-0.3,0.4-0.4l0.1-0.1l0.1,0.1c1,0.9,2,1.4,3,1.4c1,0,2.1-0.4,3-1.3
                                            	l0.1-0.1l0.2,0.1c0.2,0.2,0.5,0.4,0.6,0.5l0.2,0.1l0,0l0.1,0.1c0.2,0.1,0.4,0.2,0.6,0.3c0.2,0.1,0.4,0.2,0.6,0.2
                                            	c0.2,0.1,1.1,0.4,2.1,0.8l0.2,0.1c1,0.4,1.4,0.9,1.5,1c1.2,1.7,1.6,5,1.8,6.8c-3.1,2.5-7,3.9-10.9,3.9c-4,0-7.8-1.4-10.9-3.9
                                            	C9.2,31.7,9.7,28.4,10.9,26.7L10.9,26.7z'/>
                                            </svg>
                                        </figure>
                                        <span>Hej {$_SESSION['userSettings']['user_fullname']}</span>
                                        <ul id='hnl-dropdown'>
                                            <li><a class='hnl-dropdown-item' href='#'>&gt;&nbsp; Profile</a></li>
                                            <li><a class='hnl-dropdown-item' href='{$urlPath}/event-create.php'>&gt;&nbsp; Create event</a></li>
                                            <li><a class='hnl-dropdown-item' href='#'>&gt;&nbsp; Settings</a></li>
                                            <li><a class='hnl-dropdown-item' href='#'>&gt;&nbsp; Support</a></li>
                                            <li><a class='hnl-dropdown-item' href='/hevento/public/pages/inc/user-signout.php'>&gt;&nbsp; Log Out</a></li>
                                        </ul>
                                    </li>
                                </ul>";
                    } else {
                        echo   '<ul id="header-navigation-list">
                                    <li><a class="hnl-items" href="/hevento/public/pages/events.php">Events</a></li>
                                    <li><a class="hnl-items" href="#">Explore</a></li>
                                    <li><a class="hnl-items hnl-seprator" href="#">|</a></li>
                                    <li><a class="hnl-items" href="/hevento/public/pages/signup.php">Sign Up</a></li>
                                    <li><a class="hnl-items" href="/hevento/public/pages/signin.php">Log In</a></li>
                                </ul>';
                    };
                    ?>
                </nav>
            </div>
        </header>


        <script type="text/javascript">
            (function () {
                var navUser     =   document.getElementById('hnl-user-menu');
                var navDropdown =   document.getElementById('hnl-dropdown');

                navUser.addEventListener('click', toggleMenu);

                function toggleMenu(e) {
                    navDropdown.classList.toggle('hnl-dropdown-toggleIn');
                    navUser.classList.toggle('hnl-dropdown-active');
                }

            })();
        </script>
