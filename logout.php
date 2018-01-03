<?php
/**
 * Created by PhpStorm.
 * User: Xian
 * Date: 5/29/2017
 * Time: 6:33 PM
 */

require_once ('includes/utilities.php');
require_once ('includes/page_constants.php');

session_start();
destroy_session();
header('Location: ' . LOGIN_PAGE);