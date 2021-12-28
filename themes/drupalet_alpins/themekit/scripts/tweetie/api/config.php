<?php
/**
 * Your Twitter App Info
 */

$CONSUMER_KEY = "dEb82yoH1ZTWghlkRPxYdZMOF";
$CONSUMER_SECRET = "FKREimY0IW9WkjAvJJlvt86Xk3zosxQ2nJ0o2TyHxbp3Kl7xwK";
$ACCESS_TOKEN = "209549641-7GnuFRlrih40Lnh8ktiSoTTbiUgzYIhA7vfPfzr6";
$ACCESS_SECRET = "0IylsXXju0qleFR6hq01fdiTgdHH4A0FTqdkASffqjING";

if (file_exists("../../../../../../wp-load.php")) {
    include("../../../../../../wp-load.php");
    if (hc_is_setted("twitter-consumer-key")) $CONSUMER_KEY = hc_get_setting("twitter-consumer-key");
    if (hc_is_setted("twitter-consumer-secret")) $CONSUMER_KEY = hc_get_setting("twitter-consumer-secret");
    if (hc_is_setted("twitter-access-token")) $CONSUMER_KEY = hc_get_setting("twitter-access-token");
    if (hc_is_setted("twitter-access-secret")) $CONSUMER_KEY = hc_get_setting("twitter-access-secret");
}

// Consumer Key
define('CONSUMER_KEY', $CONSUMER_KEY);
define('CONSUMER_SECRET', $CONSUMER_SECRET);

// User Access Token
define('ACCESS_TOKEN', $ACCESS_TOKEN);
define('ACCESS_SECRET', $ACCESS_SECRET);

// Cache Settings
define('CACHE_ENABLED', false);
define('CACHE_LIFETIME', 3600); // in seconds
define('HASH_SALT', md5(dirname(__FILE__)));
