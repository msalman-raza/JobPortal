<?php

require "vendor/autoload.php";

$manageJobs = new Portal\Root\ManageJobs();

$data = [
    'title' => 'Job Title',
    'description' => 'This is job description',
    'email' => 'salman@salmanraza.com'
];

$manageJobs->postJob($data);