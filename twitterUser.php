<?php

    $accountTweeterArr = array();

    // Create the first tweeter account

    $tweeterAccount = new tweeterAccount();
    $tweeterAccount->setName("<Put the twitter login for the first user>");
    $tweeterAccount->setConsumerKey('<Put the consumer key here>');
    $tweeterAccount->setConsumerSecret('<Put the consumer secret here>');
    $tweeterAccount->setAccessToken('<Put the access token here>');
    $tweeterAccount->setAccessTokenSecret('<Put the access token secret here>');

    array_push($accountTweeterArr, $tweeterAccount);

    // Create the second tweeter account

    $tweeterAccount = new tweeterAccount();
    $tweeterAccount->setName("<Put the twitter login for the second>");
    $tweeterAccount->setConsumerKey('<Put the consumer key here>');
    $tweeterAccount->setConsumerSecret('<Put the consumer secret here>');
    $tweeterAccount->setAccessToken('<Put the access token here>');
    $tweeterAccount->setAccessTokenSecret('<Put the access token secret here>');

    array_push($accountTweeterArr, $tweeterAccount);


?>
