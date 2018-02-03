<?php require_once('../../private/initialize.php'); ?>
<?php include(COMPONENTS_PATH . '/header.php'); ?>
<!-- ============================================  -->


<div class="main-container">
    <div class="main">
        <h2 class="event-h2">Create Event</h2>
        <form class="event-createform" action="/hevento/public/pages/inc/event-create.inc.php" method="post" enctype="multipart/form-data">
            <div class="ec-leftbar">
                <div class="ec-title">
                    <h3>Title</h3>
                    <input class="style-input" required spellcheck="false" value="" id="event-fullname"  type="text" name="event_title" placeholder="Title">
                </div>
                <div class="ec-address">
                    <h3>Address</h3>
                    <div class="ec-address-forms">
                        <input class="style-input" required spellcheck="false" value="" id="event-address"  type="text" name="event_address" placeholder="Address">
                        <input class="style-input" required spellcheck="false" value="" id="event-zip"  type="text" name="event_zip" placeholder="Zip">
                        <input class="style-input" required spellcheck="false" value="" id="event-town"  type="text" name="event_town" placeholder="Town">
                    </div>
                    <h3>Capacity</h3>
                    <div class="ec-address-capacity">
                        <select required id="ec-capacity" name="event_capacity" class="style-input">
                          <option value="10">10</option>
                          <option value="50">50</option>
                          <option value="100">100</option>
                          <option value="+100">+100</option>
                        </select>
                    </div>
                    <div class="ec-address-maps">
                        MAPS
                    </div>
                </div>
                <div class="ec-description">
                    <div id="ec-editor"></div>
                    <textarea required name="event_description" id="myEditor"></textarea>
                </div>
            </div>
            <div class="ec-rightbar">
                <div class="ec-cover">
                    <h3>Cover</h3>
                    <input class="style-input" required value="" id="event-cover"  type="file" name="event_cover" placeholder="Cover">
                </div>
                <div class="ec-date">
                    <h3>Date</h3>
                    <input class="style-input" required spellcheck="false" value="" id="event-date"     name="event_date"       placeholder="Date and time">
                    <input class="style-input" required spellcheck="false" value="" id="event-duration" name="event_duration"   placeholder="Duration">
                    <select required id="event-deadline" name="event_deadline" class="style-input">
                      <option value="1">1 Dag</option>
                      <option value="2">2 Dag</option>
                      <option value="3">3 Dag</option>
                      <option value="4">4 Dag</option>
                    </select>
                </div>
                <div class="ec-category">
                    <h3>Category</h3>
                    <ul class="ec-category-checkboxes">
                        <li>
                            <input id="ec-category-box1" class="checkbox" type="checkbox" name="event_category_checkboxes[]" value="1">
                            <label for="ec-category-box1" class="style-checkbox-label">Food & drink</label>
                        </li>
                        <li>
                            <input id="ec-category-box2" class="checkbox" type="checkbox" name="event_category_checkboxes[]" value="2">
                            <label for="ec-category-box2" class="style-checkbox-label">Ticket sale at the place</label>
                        </li>
                        <li>
                            <input id="ec-category-box3" class="checkbox" type="checkbox" name="event_category_checkboxes[]"value="3">
                            <label for="ec-category-box3" class="style-checkbox-label">Physiotherapist only</label>
                        </li>
                        <li>
                            <input id="ec-category-box4" class="checkbox" type="checkbox" name="event_category_checkboxes[]"value="4">
                            <label for="ec-category-box4" class="style-checkbox-label">Hands on training</label>
                        </li>
                    </ul>
                    <div class="ec-category-type">
                        <select required name="event_category_type" class="style-input">
                          <option value="arrangement">Arrangement</option>
                          <option value="kursus">Kursus</option>
                          <option value="meetup">Meetup</option>
                          <option value="1-on-1 interaction">1-on-1 Interaction</option>
                        </select>
                    </div>
                    <!-- RADIO FIELD SET? -->
                </div>
                <div class="ec-price">
                    <h3>Price</h3>
                    <input class="style-input" required spellcheck="false" value="" id="event-price"  type="text" name="event_price" placeholder="Price">
                </div>
                <div class="ec-submit">
                    <button class="style-button" id="event-button" type="submit" name="submit">Create Event</button>
                </div>
            </div>
        </form>
    </div>
</div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../node_modules/flatpickr/dist/flatpickr.css">

<script src="../node_modules/flatpickr/dist/flatpickr.js"></script>
<script src="../node_modules/jquery/dist/jquery.js"></script>
<script src="../node_modules/froala-editor/js/froala_editor.pkgd.min.js"></script>




<script type="text/javascript">

    window.onload = function () {

        // Date =====================================================
        var eventDate       = document.getElementById('event-date');
        var eventDuration   = document.getElementById('event-duration');

        flatpickr(eventDate, {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            time_24hr: true
        });

        flatpickr(eventDuration, {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true,
            defaultDate: "01:00"

        });

        // Froala Editor ===========================================
        var ecEditor = document.getElementById('myEditor');

          $(ecEditor).froalaEditor({
              toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'formatUL', 'insertLink'],
              quickInsertButtons: [''],
              quickInsertTags: [''],
              height: 300
          });

    }




</script>


<!--

<select required id="event-capacity" name="event_capacity" class="style-input">
  <option value="volvo">Arrangement</option>
  <option value="saab">Kursus</option>
  <option value="opel">Meetup</option>
  <option value="audi">1-on-1 Interaction</option>
</select>
-->

<!-- ============================================  -->
<?php include(COMPONENTS_PATH . '/footer.php'); ?>
