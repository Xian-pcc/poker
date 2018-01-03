<?php
/**
 * Created by PhpStorm.
 * User: Xian
 * Date: 5/17/2017
 * Time: 6:44 PM
 */

require_once ('includes/poker_constants.php');
require_once ('includes/poker_code.php');
require_once ('includes/page_constants.php');
require_once ('includes/utilities.php');
require_once ('includes/login_constants.php');
require_once ('includes/hand_type.php');

require_secure();
session_start();
require_login();
/**/
$deck = get_session_value(DECK_KEY);
$hand = get_session_value(HAND_KEY);

draw_cards($hand, $deck);

//$hand = [[0,0],[9,0],[10,0],[11,0],[12,0]];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Video Poker</title>
    <link rel="stylesheet" type="text/css" href="includes/poker.css.php">
    <script src="includes/poker.js.php"></script>
</head>
<body onload="javascript:init(true);">
<div id="spacer"><?php show_user(); ?></div>
<?php show_content($hand, TRUE); ?>

</body>
</html>
