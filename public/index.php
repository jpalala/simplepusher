<!DOCTYPE html>
<head>
  <title>Pusher Test</title>

 <script src="https://js.pusher.com/5.1/pusher.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>

<body>
  <h1>Pusher Test</h1>
  <p>
    Publish an event to channel <code>my-channel</code>
    with event name <code>my-event</code>; it will appear below:
  </p>
  <div id="app">
    <ul>
      <li v-for="message in messages">
        {{message}}
      </li>
    </ul>
  </div>

 <?php
  include_once(__DIR__ . '/../includes/scripts.php');
 ?>
</body>
