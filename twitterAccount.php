<?php

class tweeterAccount {

    public $name = "";
    public $consumerKey = "";
    public $consumerSecret = "";
    public $accessToken = "";
    public $accessTokenSecret = "";
    public $message = "";

    function __construct() {
    }

    function getValueByName($value, $name) {
    }

    function setName($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }

    function setConsumerKey($consumerKey) {
        $this->consumerKey = $consumerKey;
    }

    function getConsumerKey() {
        return $this->consumerKey;
    }

    function setConsumerSecret($consumerSecret) {
        $this->consumerSecret = $consumerSecret;
    }

    function getConsumerSecret() {
        return $this->consumerSecret;
    }

    function setAccessToken($accessToken) {
        $this->accessToken = $accessToken;
    }

    function getAccessToken() {
        return $this->accessToken;
    }

    function setAccessTokenSecret($accessTokenSecret) {
        $this->accessTokenSecret = $accessTokenSecret;
    }

    function getAccessTokenSecret() {
        return $this->accessTokenSecret;
    }

    function setMessage($message) {
        $this->message = $message;
    }

    function getMessage() {
        return $this->message;
    }

}

?>
