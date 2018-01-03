<?php
/**
 * Created by PhpStorm.
 * User: Xian
 * Date: 5/17/2017
 * Time: 3:23 PM
 */
header('Content-Type: text/javascript');
require_once ('poker_constants.php');
?>

function centerContent() {
    var content = document.getElementById('content');
    var windowHeight = window.innerHeight;
    var contentHeight = parseInt(window.getComputedStyle(content).height);
    var offset = (windowHeight - contentHeight) / 2;
    var spacer = document.getElementById('spacer');
    spacer.style.height = offset + 'px';
}

function submitForm() {
    var drawForm = document.getElementById('draw_form');

    drawForm.submit();
}

function getDraw(id) {
    return document.getElementById('<?php echo CARD_KEY; ?>' + id).value;
}

function setDraw(id, draw) {
    document.getElementById('<?php echo CARD_KEY; ?>' + id).value = draw;
}

function  toggleCard(card) {
    var id = card.getAttribute('<?php echo CARD_ID; ?>');

    if(getDraw(id) == '<?php echo DRAW; ?>') {
        setDraw(id, '<?php echo KEEP; ?>');
        card.src = card.getAttribute('<?php echo CARD_SRC; ?>')
    } else {
        setDraw(id, '<?php echo DRAW; ?>');
        card.src = '<?php echo CARD_BACK; ?>';
    }
}

function makeCardsClickable() {
    var cards = [].slice.call(document.getElementsByClassName('<?php echo CARD_CLASS; ?>'));
    cards.forEach(function(card) {
        card.addEventListener('click', function () {
            toggleCard(card);
        });
    });
    for(var i = 0; i < <?php echo HAND_CARDS; ?>; i++) {
        setDraw(i, '<?php echo KEEP; ?>');
    }
}

function showContent() {
    var content = document.getElementById('content');
    content.style.visibility = 'visible';
}

function init(final) {
    window.addEventListener('resize', function () {
        centerContent();
    })
    centerContent();
    showContent();

    if(!final) {
        var drawButton = document.getElementById('draw_button');
        drawButton.addEventListener('click', function () {
            submitForm();
        });
        makeCardsClickable();
    };
}
