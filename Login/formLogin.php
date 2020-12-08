<link href="<?=CSS?>bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?=CSS?>bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="<?=CSS?>login.css" rel="stylesheet" media="screen">

<script type="text/javascript" src="<?=JS?>jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="<?=JS?>validation.min.js"></script>
<script type="text/javascript" src="<?=JS?>form_scriptLogin.js"></script>
<script type="text/javascript" src="<?=JS?>bootstrap.min.js"></script>

    
<div class="signin-form">
	<div class="container">
       <form class="form-signin" method="post" id="login-form">
        <h2 class="form-signin-heading">Inicia Sesi&oacute;n</h2><hr />
        <div id="error">
        <!-- se muestra el error ! -->
        </div>
        
        <div class="form-group">
        <input type="search" class="form-control" placeholder="Nombre de usuario" name="user" id="user" />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Contrase&ntilde;a" name="password" id="password" />
        </div>
       
     	<hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-submit">
    		<span class="glyphicon glyphicon-log-in">&nbsp; Sign In</span> 
			</button> 	
        </div>  
      
      </form>
	  
	  
    </div> 
	<marquee direction="right"><img id="carro-gif" src="<?=ROOTURL?>images/carro.gif" alt="Rialemar &copy;"></marquee>
</div>
