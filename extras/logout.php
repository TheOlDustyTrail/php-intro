<?php
session_start();

// destroy the session
session_destroy();
header('Location: /php-intro/13_sessions.php');