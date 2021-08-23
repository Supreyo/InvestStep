
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact Us</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
      <div style="border-radius: 5px;  background: #4E9CAF; width:70px; height:25px; text-align:center; margin: 20px;">
      	<a href="https://investstep.netlify.app/home.html" style="text-decoration:none;color: white; display: inine-block;vertical-align: middle;">Home</a>
      </div>
        <main>
          <div class="wrapper">
              <div class="title">
                  <h1>Contact Us!</h1>
              </div>
              <form class="contact-form" action="contactform.php" method="POST">
                  <div class="contact-form">
                      <div class="input-fields">
                          <input type="text" class="input" placeholder="Name" name="name" required>
                          <input type="text" class="input" placeholder="Email Address" name="mail" required>
                          <input type="text" class="input" placeholder="Subject" name="subject" required>
                      </div>
                      <div class="msg">
                          <textarea type="text" class="input" placeholder="Message" name = "message" required></textarea>
                           <button class="btn" type="submit">Send Message</button>
                      </div>
                  </div>
              </form>
          </div>
        </main>
    </body>
</html>

