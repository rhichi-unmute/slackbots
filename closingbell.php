$slack_webhook_url = "https://hooks.slack.com/services/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"

$data = array(
	"text" => "My text goes here!", //probably $msg?
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
