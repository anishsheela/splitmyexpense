  <!DOCTYPE html>
  <html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Split My Expenses</title>
  <link href="soon.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="jquery-1.7.2.min.js"></script> 
  <script type="text/javascript">
    $(document).ready(function() {
      var tbval = $('.wmark1').val();
      $('.wmark1').focus(function() { $(this).val('');});
      $('.wmark1').blur(function() { $(this).val(tbval);});
    });
      $(document).ready(function() {
      var tbval = $('.wmark2').val();
      $('.wmark2').focus(function() { $(this).val('');});
      $('.wmark2').blur(function() { $(this).val(tbval);});
    });
  </script>
  </head>
  <body>
  <div id="back">
      <div id="img">
      <img src="images/k.png" height="30%" />
      Split my expenses
      <br><br>
      we will split your expenses soon.
      </div>
      <div class="container">
      <form id="contactform" class="rounded" method="post" action="soon_action.php">
          Please let me know when you are ready to split my expenses.
          <div class="field">
              <label for="name">Name:</label>
              <input type="text" class="input" name="name" id="name" />
              <p class="hint">Enter your name.</p>
          </div>
	      <div class="field">
    	      <label for="email">Email:</label>
        	  <input type="text" class="input" name="email" id="email" />
          	<p class="hint">Enter your email.</p>
	      </div>
	         <input type="submit" name="Submit"  class="button" value="Subscribe" />
      </form>
  	</div>
</div>
  <div id="footer">
      Developed by <a href="http://helloinfinity.com/">Helloinfinity</a> | Copyright 2012 Splitmyexpense.com
  </div>
  </body>
  </html>
