<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'sa1',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    '30435b40f08263425cae',
    '0f0b2003e5a46663714d',
    '1348638',
    $options
  );

  $data['message'] = 'hello world';
  $pusher->trigger('my-channel', 'my-event', $data);
?>
