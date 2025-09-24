<?php
// Site configuration
$conf['site_name'] = "BBIT DevOps";
$conf['site_email'] = "info@bbit.edu";
$conf['site_url'] = "http://localhost/dol/";

// Site language
$conf['language'] = "en";

// Database constants
$conf['db_type'] = "pdo";
$conf['db_host'] = "localhost";
$conf['db_user'] = "root";
$conf['db_pass'] = "1234";
$conf['db_name'] = "dol";

// Email configuration
$conf['mail_type'] = "smtp"; // Options: smtp, sendmail, mail
$conf['smtp_host'] = "smtp.gmail.com";
$conf['smtp_user'] = "daisy.amolloh@strathmore.edu";
$conf['smtp_pass'] = "xxvw ezju glgy tugg";
$conf['smtp_port'] = 465;
$conf['smtp_secure'] = "ssl";

// Valid email domains for registration
$conf['valid_email_domains'] = ["gmail.com", "yahoo.com", "outlook.com", "strathmore.edu"];

// Valid password length
$conf['min_password_length'] = 4;