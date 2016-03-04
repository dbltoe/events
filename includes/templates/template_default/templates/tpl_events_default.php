<?php
/**
 * @package Page Template for Scheduled Events 1.6
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_events_default.php 3001 2012-01-18 11:45:06Z dbltoe $
 */

?>
<div class="centerColumn" id="events">
<h1 id="eventsDefaultHeading"><?php echo HEADING_TITLE; ?></h1><hr />
<?php
  // Display the text of each event in a paragraph
  foreach($eventData as $eventInfo) {
    echo "<h5>" . $eventInfo["event_name"] . "</h5><hr />";
    echo "<blockquote>";
    if ($eventInfo['event_location'] != '') echo "<strong>Place:  </strong>" . $eventInfo["event_location"] . "<br />";
    if ($eventInfo['event_start'] != '') echo "<strong>Start Date:  </strong>" . zen_date_long($eventInfo["event_start"]) .  "<br />";
    if ($eventInfo['event_stop'] != '') echo "<strong>Stop Date:  </strong>" . zen_date_long($eventInfo["event_stop"]) .  "<br />";
    if ($eventInfo['event_comments'] != '') echo "<strong>Comments:  </strong>" . $eventInfo["event_comments"] .   "<br />";
    if ($eventInfo['event_booth_location'] != '') echo "<strong>Booth Location:  </strong>" . $eventInfo["event_booth_location"] .  "<br />";
    if ($eventInfo['special_text'] != '') echo "<strong>Special:  </strong>" . $eventInfo["special_text"] . "<br />";
    if ($eventInfo['map'] != '') echo "<strong><a href=" . $eventInfo["map"] . ' target="_blank">Driving Directions</a></strong>';
    echo "</blockquote><hr />";
  } 
?>
<div class="buttonRow back"><?php echo zen_back_link() . zen_image_button(BUTTON_IMAGE_BACK, BUTTON_BACK_ALT) . '</a>'; ?></div>
</div>