
<body>
<center>
<br><br><br>
<TABLE>
<center>

<table border="1px solid" width="50 %" Style="text-align:center" bgcolor="Lightblue">
	<tr>

	<td width="10 %" Style="text-align:center">
		<?php echo $this->Html->image('icon_user.png');
		?>


	<table id="tconnexion" width="31.5 %" bgcolor="Lightblue">
	<tr>
	<td width="40 %" bgcolor="Lightblue">
    <?php
  echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login')));
  echo $this->Form->input('User.username');
  echo $this->Form->input('User.password');
  echo $this->Form->end('Connexion');
  ?>
</td>

	  </tr>


    </table>

	</table>
