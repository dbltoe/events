The Scheduled Events Zen Cart add-on is the product of several months of trial and error attempting to provide a way for customers to let the public know when and where their next event will be.  It utilizes the override system to avoid affecting any core files.  It should not affect any files that you may have previously changed.  However, ALWAYS backup before installing any mod.

The add-on includes this read_me file, an installation_user_guide file, an events.sql patch file, and the two folders that will need to be ftp'd to your site.

The database is changed with the events.sql patch that adds an event table (zen_events) to the database that allows the cart to display upcoming events.  Events that are past are automatically dropped from the display.

The database is set to accept information for:
  1.  The name of the Event - event_name
  2.  The place at which the event is held - event_location
  3.  The date the event starts - event_start
  4.  The date the event ends - event_stop
  5.  Any comments about the event, such as where to park - event_comments
  6.  The shop's location at the event, i.e. Second Bldg in the Back - event_booth_location
  7.  Any specials that may be found at the event or a way the customer can get a special discount - special_text
  8.  A place to insert a link to the event's address from Google Maps or any other map program - map
  
 A folder called "eventz" is included.  It contains files that assist  the shop admin(s) in entering/editing scheduled events.  Users already familiar with MySql inserts and updates may choose not to load this folder as the system will work just fine without it.  It is only included to help those with little MySql knowledge.

Help is available in the forum at http://www.zen-cart.com/forum/showthread.php?t=116680