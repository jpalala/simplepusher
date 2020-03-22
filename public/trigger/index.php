<?php
  require __DIR__ . '/../../vendor/autoload.php';

  $options = array(
     'cluster' => 'ap1',
     'useTLS' => true
   );

	$pusher = new Pusher\Pusher(
	    '1791af76421adfa57901',
	    '59b60fb0e4117b949205',
	    '967507',
            $options
     );

    $data['message'] = 'hello world';
    $pusher->trigger('my-channel', 'my-event', $data);
?>
Ran trigger
