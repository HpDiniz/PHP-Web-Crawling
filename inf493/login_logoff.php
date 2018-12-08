	<?php
	
	if(isset($logado)){
		echo "<div id='logp'>";
		
		echo "<div id='divNome'>Olá $logado</div>";
		?>
		<div id="divFoto"><img id="avatarProf" src="avatar.png"></div>
		<?php
		
		echo "<div id='divFavor'><a href='favoritos.php'><button class='bfav'>Favoritos</button></a></div>";
		
		echo "<div id='divSair'>";
		
		if( $_SERVER["PHP_SELF"] == "/inf493/resultado.php" ){
			echo "<form method='post' action='resultado.php?ingrediente1=$ing1&ingrediente2=$ing2&ingrediente3=$ing3'>";
		}
		else if( $_SERVER["PHP_SELF"] == "/inf493/resultado2.php" ){
			echo "<form method='post' action='resultado2.php?Confira=$ing1'>";
		}
		else{
			$url = htmlspecialchars($_SERVER["PHP_SELF"]);
			echo "<form method='post' action='$url'>";
		}
		?>
		<input type="hidden" name="loginControl" value="logoff">
		<button class="cancelbtn" type="submit">Sair</button>
		</form>
		</div>
		
		<?php
	}
	else{
		echo "<div id='logpOff'>";
		
		?><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button><?php
	}
	?>
	</div>

<div id="id01" class="modal">

<?php
if( $_SERVER["PHP_SELF"] == "/inf493/resultado.php" ){
	echo "<form class='modal-content animate' method='post' action='resultado.php?ingrediente1=$ing1&ingrediente2=$ing2&ingrediente3=$ing3'>";
}
else if( $_SERVER["PHP_SELF"] == "/inf493/resultado2.php" ){
	echo "<form class='modal-content animate' method='post' action='resultado2.php?Confira=$ing1'>";
}
else{
	$url = htmlspecialchars($_SERVER["PHP_SELF"]);
	echo "<form class='modal-content animate' method='post' action='$url'>";
}
?>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="login2.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="login" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="senha" required>
        
      <button id="subLog" type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
	  
	  <input type="hidden" name="loginControl" value="logon">
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>