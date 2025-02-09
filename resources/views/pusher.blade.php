<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher("{{ env('PUSHER_APP_KEY') }}", {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
        const channel = document.getElementById('channel');
        channel.innerHTML = data.data.name;
        // alert(data.data.name);
        // alert(data.data.subscribe_to);
        // alert(JSON.stringify(data));
    });
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code id='channel'>my-channel</code>
    with event name <code>my-event</code>.
  </p>
</body>