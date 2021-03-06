<?php
###############################################################
# Cron Backup Script
###############################################################
# Developed by Jereme Hancock for Cloud Sites
###############################################################

// Set information specific to your site
$db_host     = "";
$db_user     = "";
$db_password = "";
$db_name     = "";
$url         = "";
$path        = "";
$datacenter  = "";

// Exclude files & folders from the file backup -- to exclude a directory, suffix the directory name with "/\*".
$exclude = array();

// Set your Cloud Files API credentials
$username = "";
$key      = "";

// Backup Database? This checks if the database credentials are empty and if so the script will skip the database backup
if (!empty($db_host) && !empty($db_user) && !empty($db_password) && !empty($db_name)) {
    $db_backup = "true";
} else {
    $db_backup = "false";
}

$installed_version = "";

?>
