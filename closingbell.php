$command = $_POST['command'];
$therabuddy = $_POST['text'];
$token = $_POST['token'];

if($token != 'BPAgtuWlF4WZNr0sp8WYstx7')
  $msg = "The token for the slash command doesn't match. Check your script.";
  die($msg);
  echo $msg;

$user_agent = "Closing Bell (https://github.com/rhichi-unmute/slackbots/closingbell; rhichi@unmute.today)";

$reply = "We just successfully closed another case! Congratulations " .$therabuddy ", and thank you for another job well done! :party-parrot:"

echo $reply
