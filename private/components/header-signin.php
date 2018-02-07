<ul id='header-navigation-list'>
    <li><a class='hnl-items' href='/pages/events.php'>Events</a></li>
    <li><a class='hnl-items' href='#'>Explore</a></li>
    <li><a class='hnl-items hnl-seprator' href='#'>|</a></li>
    <li class='hnl-items hnl-hideborder hnl-dropdown-container' id='hnl-user-menu'>
        <figure class="icon-header-icon-user"></figure>
        <span>Hej <?php echo $_SESSION['userSettings']['user_fullname'] ?></span>
        <ul id='hnl-dropdown'>
            <li><a class='hnl-dropdown-item' href='#'>&gt;&nbsp; Profile</a></li>
            <li><a class='hnl-dropdown-item' href='/pages/event-create.php'>&gt;&nbsp; Create event</a></li>
            <li><a class='hnl-dropdown-item' href='#'>&gt;&nbsp; Settings</a></li>
            <li><a class='hnl-dropdown-item' href='#'>&gt;&nbsp; Support</a></li>
            <li><a class='hnl-dropdown-item' href='/pages/inc/user-signout.php'>&gt;&nbsp; Log Out</a></li>
        </ul>
    </li>
</ul>
