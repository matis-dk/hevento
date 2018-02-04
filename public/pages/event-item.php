<li class="event-item">
    <a href=<?php echo "/hevento/public/pages/event-profile.php?eventid=" . $event_id; ?> class="event-item-link">
        <figure class="event-item-img" style="background-image: url('https://images.unsplash.com/photo-1494023120489-e26d4967e173?ixlib=rb-0.3.5&s=ea74cec3b8ad95fe1c1bd0a45a413b00&auto=format&fit=crop&w=1950&q=80')"></figure>
        <div class="event-item-content">
            <div class="event-item-text">
                <p class="event-item-category"><?php echo $event_category_type; ?></p>
                <h4 class="event-item-title"><?php echo $event_title; ?></h4>
                <p class="event-item-price"><?php echo $event_price; ?>kr DKK pr. person</p>
            </div>
            <div class="event-item-date">
                <h2 class="event-item-dateday"><?php echo getDateDay($event_date); ?>.</h2>
                <span class="event-item-datemonth"><?php echo date("F", strtotime($event_date));  ?></span>
            </div>
        </div>
    </a>
</li>
