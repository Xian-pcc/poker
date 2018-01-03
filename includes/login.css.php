<?php
/**
 * Created by PhpStorm.
 * User: Syan
 * Date: 5/28/2017
 * Time: 7:17 PM
 */
header('Content-Type: text/css');
?>

table {
    border:1px solid black;
    width:400px;
    border-radius: 5px;
}

th {
    text-align: right;
    font-size: 0.75em;
    width: 140px;
}

.login_header, .login_submit {
    text-align: center;
    padding: 15px;
    margin: 20px;
    font-weight: bold;
}

#or {
    width:400px;
    height: 25px;
    text-align: center;
    padding: 25px 0;
}

#login_content {
    width: 400px;
    background-color: lightblue;
    padding: 60px;
    margin: auto;
    border-radius: 15px;
}

#error_info {
    color: red;
    padding: 20px 0;
    font-size: 1.5em;
}

#error_detail {
    font-size: 0.7em;
}