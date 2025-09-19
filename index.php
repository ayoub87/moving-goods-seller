<?php
// Main entry point - check if installed
if (file_exists('config.php') && file_exists('includes/database.php')) {
    // System is installed, redirect to customer view
    header('Location: customer/');
} else {
    // System is not installed, redirect to installation
    header('Location: install/');
}
exit;

// END OF FILE