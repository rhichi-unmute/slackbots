$slack_webhook_url = "https://hooks.slack.com/services/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"

$command = $_POST['command'];
$therabuddy = $_POST['text'];
$token = $_POST['token'];

if($token != 'BPAgtuWlF4WZNr0sp8WYstx7')
  $msg = "The token for the slash command doesn't match. Check your script.";
  die($msg);
  echo $msg;

$user_agent = "Closing Bell (https://github.com/rhichi-unmute/slackbots/closingbell; rhichi@unmute.today)";

$msg = "We just successfully closed another case! Congratulations " .$therabuddy ", and thank you for another job well done! :party-parrot:"

$data = array(
	"username" => "Closing Bell",
	"channel" => $_POST['channel_id'],
	"text" => $msg, //probably $msg?
);

$json_string = json_encode($data);
$slack_call = curl_init($slack_webhook_url);
curl_setopt($slack_call, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($slack_call, CURLOPT_POSTFIELDS, $json_string);
curl_setopt($slack_call, CURLOPT_CRLF, true);
curl_setopt($slack_call, CURLOPT_RETURNTRANSFER, true);
curl_setopt($slack_call, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "Content-Length: " . strlen($json_string))
);

$result = curl_exec($slack_call);
curl_close($slack_call);
