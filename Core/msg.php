<script>
  newnotification();
  function newnotification() {



    // Let's check if the browser supports notifications
    if (!("Notification" in window)) {
      alert("This browser does not support desktop notification");
    }

    // Let's check whether notification permissions have already been granted
    else if (Notification.permission === "granted") {
      // If it's okay let's create a notification

      randomNotification();



      function randomNotification() {
    var name = '<?php echo $username ?>';
        var randomQuote = "If we don't care, who will ? Let's make 'GECA' A wonderful place... Welcome " + name + " !" ;
        var options = {
            body: randomQuote,
            icon: 'Assets/img/welcome.png',
        }

        var n = new Notification('Hi, '+ name + ' !',options);
        setTimeout(n.close.bind(n), 7000); 
      }

    }

    // Otherwise, we need to ask the user for permission
    else if (Notification.permission !== 'denied') {
      Notification.requestPermission(function (permission) {
        // If the user accepts, let's create a notification
        if (permission === "granted") {
        
            randomNotification();            

        }
      });
    }

  }
</script>
<div class="container">
  <div class="row user-body">
    <div class="col s12 center">
      <a class="waves-effect waves-light btn-large update-btn" href="user/update">UPDATE PROFILE</a>
    </div>

    <p class="nothnig-to-show gray left"> <span id="main-msg">Sorry..! Right Now there's nothing to show :( </span>Please update your profile to dive into world of unlimited possibilities.</p>
  </div>
</div>