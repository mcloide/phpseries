<?php
require_once('config/boostrap.php');
 
// fully destroy the session
session_destroy();
unset($_COOKIE[session_name()]);