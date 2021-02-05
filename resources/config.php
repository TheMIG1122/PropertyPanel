<?php session_start();
ob_start();

//=====================
//      Init Vars
//=====================

//--------------  APP
defined("APP") ? null : define("APP","TechRoar-PropertyPanel");
defined("Domain") ? null : define("Domain","http://localhost/10.100.1/Github/TechRoar/Code/");
defined("LOGO") ? null : define("LOGO",Domain."/assets/images/icon.png");

//--------------  Database
defined("DB_HOST") ? null : define("DB_HOST", "localhost");
//  Local
defined("DB_USER") ? null : define("DB_USER","root" );
defined("DB_PASS") ? null : define("DB_PASS", "" );
defined("DB_NAME") ? null : define("DB_NAME","techroarpropertypanel");
//  Server
// defined("DB_USER") ? null : define("DB_USER","femdo1_ranksboost");
// defined("DB_PASS") ? null : define("DB_PASS", "zQ%]%RrLxl7D");
// defined("DB_NAME") ? null : define("DB_NAME","femdo1_ranksboost");

//--------------  E-Mail
defined("SendEmail") ? null : define("SendEmail",false);
defined("SMTPEmail") ? null : define("SMTPEmail","");
defined("SMTPPassword") ? null : define("SMTPPassword","");
defined("SupportEmail") ? null : define("SupportEmail","example@any.com");

//--------------  Connection
$connection = mysqli_connect(DB_HOST , DB_USER , DB_PASS , DB_NAME);
require_once("functions.php");
require_once("genrate_email.php");