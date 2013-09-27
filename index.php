<html>
<head>
</head>
<body>
<?php

if(!isset($_POST['message'])) {
?>
<form method="post" action="index.php">
   <fieldset style="border:solid 1px black; padding:20px; width:250px; color:midnightblue; font-family:verdana;">
       <legend>Tweet</legend>
       <label for="message">Message:</label><br/>   
       <textarea name="message" id="message" cols="40" rows="4"></textarea><br/>
        <br/>
        <input type="submit" value="Tweet!" />
       </p>
   </fieldset>
</form>
<?php
} else {
    // Include twitteroauth
    require_once('twitteroauth.php');

    require_once('twitterAccount.php');

    require_once('twitterUser.php');

    // Main loop

    foreach( $accountTweeterArr as $accountTweeter) {

            $tweet = new TwitterOAuth(
                $accountTweeter->getConsumerKey(),
                $accountTweeter->getConsumerSecret(),
                $accountTweeter->getAccessToken(),
                $accountTweeter->getAccessTokenSecret()
            );

            $tweetMessage = $_POST['message'];

            if(strlen($tweetMessage) <= 140) {
                echo "Tweet send to " . $accountTweeter->getName() . " tweeter account<br/>";
                $tweet->post('statuses/update', array('status' => $tweetMessage));
            } else {
                echo "Message is too long<br/>";
            }

    }
}
?>
</body>
</html>
