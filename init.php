<?php

const HOST = 'http://localhost';
const BASE_URL = "/SAM/";

const DB_HOST = 'localhost';
const DB_NAME = 'articles';
const DB_USER = 'root';
const DB_PASS = '';
const BASE_IMG_PATH = 'assets/img/';
const ALLOW = array(".jpg", ".gif", ".png");

include_once('core/arr.php');
include_once('core/db.php');
include_once('core/system.php');

include_once('model/article.php');
include_once('model/visits.php');
include_once('model/validate.php');
