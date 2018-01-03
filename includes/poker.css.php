<?php
/**
 * Created by PhpStorm.
 * User: Xian
 * Date: 5/17/2017
 * Time: 3:20 PM
 */

header('Content-Type: text/css');
require_once ('poker_constants.php');

?>

.card_img {
    max-width: <?php echo CARD_IMAGE_PERCENT; ?>;
    max-heigth: <?php echo CARD_IMAGE_PERCENT; ?>;
    cursor: pointer;
}

.card {
    text-align: center;
    display: inline-block;
    max-width: <?php echo 100 / HAND_CARDS; ?>%;
    max-height: 100%;
}

#hand {
    font-size: 0px;
    padding: <?php echo HAND_PADDING; ?>;
}

#info {
    text-align: center;
    padding: <?php echo HAND_PADDING; ?>;
}

#draw_button {
    background-color: red;
    color: white;
    font-family: Impact, Charcoal, sans-serif;
    padding: 5px 10px;
    font-size: 3em;
    -webkit-border-radius:;
    -moz-border-radius:;
    border-radius: 10px;
    cursor: pointer;
}

#hand_type, #payoff {
    font-family: Impact, Charcoal, sans-serif;
    padding: 5px 10px;
    font-size: 3em;
}

#content {
    visibility: hidden;
}

#spacer {
    text-align: right;
}