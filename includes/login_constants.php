<?php
/**
 * Created by PhpStorm.
 * User: Xian
 * Date: 5/28/2017
 * Time: 7:17 PM
 */

/*
 * Form field names
 */

const LOGIN_USERNAME_KEY = 'login_username';
const LOGIN_PASSWORD_KEY = 'login_password';
const LOGIN_BUTTON_VALUE = 'login';
const REGISTER_USERNAME_KEY = 'register_username';
const REGISTER_PASSWORD_KEY = 'register_password';
const REGISTER_CONFIRM_PASSWORD_KEY = 'register_confirm_password';
const REGISTER_BUTTON_VALUE = 'register';

const ACCOUNT_USERNAME_FIELD = 0;
const ACCOUNT_PASSWORD_HASH_FIELD = 1;

const USER_ACCOUNT_FILE = 'data/users.csv';

const SESSION_USERNAME_KEY = 'username';
/*
 * Error message
 */

const E_LOGIN = 'Login Error!';
const E_REGISTER = 'Register Error!';

const E_NO_USERNAME = 'Username must be supplied.';
const E_NO_PASSWORD = 'Password  must be supplied.';
const E_NO_CONFIRM = 'Password confirmation  must be supplied.';
const E_CONFIRM_MISMATCH = 'Password and confirmation do not match.';
const E_ACCOUNT_EXISTS = 'Username exists, please try a different username.';
const E_USERNAME_NOT_FOUND = 'Username does not exit.';
const E_PASSWORD_INCORRECT = 'Password is incorrect.';
