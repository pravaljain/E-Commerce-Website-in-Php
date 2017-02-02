<html>
	<body>
		<?php 
			## Initialization
			$uid= NULL;
			$uname = NULL;
			$cname = NULL;
			$email = NULL;
			$phone = NULL;
			$tin = NULL;
			## Comment out the lines above to see the errors when you do not send a uid in the request
			if(isset($_REQUEST['uid'])) {
				$uid= intval(strval($_REQUEST['uid']));
				$uname = strval($_REQUEST['uname']);
				$cname = strval($_REQUEST['cname']);
				$email = strval($_REQUEST['email']);
				$phone = strval($_REQUEST['phone']);
				$tin = strval($_REQUEST['tin']);
			}
		?>
		<form>
			<input type="text" name="uid" value="<?php printf($uid); ?>">
			<input type="text" name="uname" value="<?php printf($uname); ?>">
			<input type="text" name="cname" value="<?php printf($cname); ?>">
			<input type="text" name="email" value="<?php printf($email); ?>">
			<input type="text" name="tin" value="<?php printf($tin); ?>">
			<input type="text" name="phone" value="<?php printf($phone); ?>">
		</form>
	</body>
</html>