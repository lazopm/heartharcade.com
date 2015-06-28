<head>
  <title>Pusher Test</title>
  <script src="//js.pusher.com/2.2/pusher.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    // Enable pusher logging - don't include this in production
    Pusher.log = function(message) {
      if (window.console && window.console.log) {
        window.console.log(message);
      }
    };

    var pusher = new Pusher('86740476b2bb82dbe0df');
    var channel = pusher.subscribe('test_channel');
    channel.bind('my_event', function(data) {
        document.getElementById("msg").innerHTML = data.message;
    });
  </script>
</head>
<body>
<span id="msg"></span>
</body>