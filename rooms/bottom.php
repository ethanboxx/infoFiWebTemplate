<?php 
include '../page_template.php';
output_gallery_page_with_path(
"Basement", 
<<<EOT
<img class="floatCenter"
    srcset="../private/images/photos/basement/basement.jpg 6000w,
                ../private/images/photos/basement/basement75.jpg 4500w,
                ../private/images/photos/basement/basement50.jpg 3000w,
                ../private/images/photos/basement/basement25.jpg 1500w"
    src="../private/images/photos/basement/basement.jpg" alt="Ground floor" title="Ground floor">

<p>
    The Ground Floor, now accessed through the recently added spiral staircase, would have originally been used
    for storing ammunition and supplies. The magazine room, used to store gunpowder, features "pizza oven"
    shaped holes, which are vents up to the
    top. This would have provided the ventilation and airflow needed to help keep the gunpowder dry. The
    original copper-covered door remains in place to this day, a safety feature to prevent sparking near
    gunpowder.
</p>

<img class="floatCenter"
    srcset="../private/images/photos/basement/magazineRoom.jpg 6000w,
                ../private/images/photos/basement/magazineRoom75.jpg 4500w,
                ../private/images/photos/basement/magazineRoom50.jpg 3000w,
                ../private/images/photos/basement/magazineRoom25.jpg 1500w"
    src="../private/images/photos/basement/magazineRoom.jpg" alt="Magazine Room" title="Magazine Room">

<img class="floatCenter"
    srcset="../private/images/photos/basement/magazineCopper.jpg 6000w,
                ../private/images/photos/basement/magazineCopper75.jpg 4500w,
                ../private/images/photos/basement/magazineCopper50.jpg 3000w,
                ../private/images/photos/basement/magazineCopper25.jpg 1500w"
    src="../private/images/photos/basement/magazineCopper.jpg" alt="Magazine Room - Copper door"
    title="Magazine Room - Copper door">

<p>
    Underneath the brick flooring, accessed via two hatchways with wooden covers is a smaller cistern area (which is up to 1.2m deep). This would have been used as both a water-tank (supplemented by a rainwater collection tank) and storage for food, although this does not continue under the magazine area.
</p>

<img class="floatCenter"
    srcset="../private/images/photos/basement/hatchway.jpg 6000w,
                ../private/images/photos/basement/hatchway75.jpg 4500w,
                ../private/images/photos/basement/hatchway50.jpg 3000w,
                ../private/images/photos/basement/hatchway25.jpg 1500w"
    src="../private/images/photos/basement/hatchway.jpg" alt="Puppet Door" title="Puppet Door">

<p>
    Evidence of the Tower's use as a puppet museum is seen with the display cabinets on the ground floor and the
    bright paint on the spiral stairs leading down. There was also a door inserted, out to ground level, but this
    was blocked off.
</p>

<img class="floatCenter"
    srcset="../private/images/photos/basement/puppetDoor.jpg 6000w,
                ../private/images/photos/basement/puppetDoor75.jpg 4500w,
                ../private/images/photos/basement/puppetDoor50.jpg 3000w,
                ../private/images/photos/basement/puppetDoor25.jpg 1500w"
    src="../private/images/photos/basement/puppetDoor.jpg" alt="Puppet Door" title="Puppet Door">

<p>
    <i>
        Sources: wishtower.org.uk, Wish Tower Conservation and Management Plan (Wish Tower Friends, ExtraVerte
        Community Projects), Historic England List Entry
    </i>
</p>
EOT
,
"../roomChoice.html",
"../",
[["Upstairs to middle floor", "middle.php"]]
);
?>
