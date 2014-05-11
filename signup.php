<html>
<head>
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<script type="text/javascript">
		google.load("jquery", "1.4");
	</script>
	<script type="text/javascript" src="./js/forms.js"></script>
	<script type="text/javascript" src="./js/save.js"></script>	
	<script type="text/javascript" src="./js/ajax.js"></script>
</head>
<body>
  <section class="loginform cf">  
  <form name="login" action="signup_submit.php" method="post" accept-charset="utf-8">  
      Création de compte
      <ul>  
          <li><label for="username">Username</label>  
          <input type="text" name="username" placeholder="Philippe Martin" required></li> 
          <li><label for="email">Email</label>  
          <input type="email" name="email" placeholder="yourname@email.com" required></li> 
          <li><label for="password">Password</label>  
          <input type="password" name="password" placeholder="password" pattern="{6}" required></li>  
          <li>  
          <input type="submit" value="Créer mon compte" onclick="process();"></li>  
      </ul>  
  </form>  
  </section> 
</body>
</html>