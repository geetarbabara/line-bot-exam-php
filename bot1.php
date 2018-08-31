<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '52048f7a74887f97a58b57e0d6b88bfe';
$access_token  = 'kwiNmzNUgpS0K0wJPktpWC4WSNOkVpwpJMWWmnGEyrdA6N4xOR1e+HUuhejW/M5vaRxM7orSc+Xwurf/P5MtNEImCsMPtds5p3FLITnUMy1I66o5QHgiAoG30YIKM/t5nyGCV4m7sXa2gLf9zQRWvwdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}