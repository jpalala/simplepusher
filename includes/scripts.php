  <script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('1791af76421adfa57901', {
      cluster: 'ap1',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      app.messages.push(JSON.stringify(data));
    });

    // Vue application
    const app = new Vue({
      el: '#app',
      data: {
        messages: [],
      },
    });
  </script>
