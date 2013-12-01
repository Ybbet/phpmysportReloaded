<?php
if(!defined('CONF_INCLUDED'))
{
################################
# Configuration file
################################

# Website information
define('ROOT','C:/UwAmp/www/github/phpmysportReloaded'); # Physic path to the root of the server (no / at the end)
define('ROOT_URL','http://localhost/github/phpmysportReloaded'); # URL of the website  (no / at the end)
define('SITE_TITLE','federacion boliviana de rugby'); # Site title
define('CLUB','0'); # ID of the default club (equal to 0 if league mode)

# Database information
define('SGBD_HOST','localhost'); # Host address
define('SGBD_USER','root'); # User name
define('SGBD_PWD','root'); # MySQL password
define('SGBD_NAME','phpmysport_fbr'); # Name of the database
define('SGBD_PREFIX','pms_'); # Prefix of database tablenames

# File
define('FILE_FOLDER','upload',1); # Define the file where file are uploaded
define('AVATAR_FOLDER','avatar',1); # Define the folder where user can choose an avatar
define('MAX_FILE_SIZE','8388608'); # Maximum size of file to upload (octet)

# Mail
define('MAIL','0'); # Allow (1) or not (0) the server to send mail (php mail() function must be enabled)
define('SENDER_EMAIL',''); # Mail address used to send mail
define('SENDER_NAME','federacion boliviana de rugby'); # Name of the sender

# Items per page
define('NB_NEWS','10',1); # Number of news per page
define('NB_CLUB','20',1); # Number of clubs per page
define('NB_TEAM','20',1); # Number of teams per page
define('NB_MEMBER','20',1); # Number of members per page
define('NB_MATCH','20',1); # Number of matches per page
define('NB_COMPETITION','10',1); # Number of competition per page
define('NB_FIELD','20',1); # Number of fields per page
define('NB_FORUM_TOPIC','20',1); # Number of topics per page
define('NB_FORUM_MESSAGE','10',1); # Number of messages per page
define('HOME_NB_NEWS','3',1); # Number of news on the home page
define('HOME_NB_MATCH','5',1); # Number of matches on the home page

# Mini-standings
define('MS_SHOW','home',1); # Define where the mini standings is shown (none,home,all)
define('MS_NB_CLUB_MAX','5',1); # Number of clubs display in mini standings
$ms_column=array('MJ','V','%V','N'); # Define columns to display in mini standings (refer to stats codes)
define('MS_SEASON','1',1); # ID of the default season in mini standings
define('MS_COMPETITION','',1); # ID of the default competition in mini standings
define('MS_ROUND','',1); # ID of the default round in mini standings
define('MS_SHOW_FORM','1',1); # Show (1) or not (0) the form to choose a competition

# Member registration
define('REGISTRATION','0'); # Activate (1) or not (0) the member registration
define('REGISTRATION_MAIL','0'); # Activate (1) or not (0) sending emails for member registration

# Miscellanious
define('VERSION','1.4'); # Script version
define('URL_REWRITE','0'); # Allow (1) or not (0) url rewriting

define('NB_MAX_PLAYER','15'); # Maximum number of player per team during a match
define('SITE_OPEN','1'); # (1) the site is open , (0) the site is closed (in construction)

define('TPL_DOSSIER','bluesky',1);
define('TPL_URL',ROOT.'/template/'.TPL_DOSSIER.'/',1);

define('LANG','fr'); # Language of the website

define('CONF_INCLUDED','1');
}
?>