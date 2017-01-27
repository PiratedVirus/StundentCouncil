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

    <p class="nothnig-to-show gray left"> <span id="main-msg">There you go <?php echo $fname; ?>....</span> <br>Congrats, you are the part of revolutionary movement  in the <b>History of 'GECA'.</b> Let's change our college Together.<br> Opportunities according to your interests will be soon informed to you.</p>
  </div>
</div>
