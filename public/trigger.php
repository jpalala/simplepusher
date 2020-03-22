<?php
  require __DIR__ . '../vendor/autoload.php';

  $options = array(
     'cluster' => 'ap1',
     'useTLS' => true
   );
  // TODO: CHANGETHIS: APP_KEY, APP_SECRET and APP_ID
	$pusher = new Pusher\Pusher(
	    'APP_KEY', 
      'APP_SECRET',
       'APP_ID',
       $options
     );

    $data['message'] = 'hello world';
    $pusher->trigger('my-channel', 'my-event', $data);
?>

