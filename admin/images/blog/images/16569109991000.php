
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>email</title>
</head>

<body>
<form method="post">
User name: <input type="text" name="uname" required><br>
Email: <input type="text" name="uemail" required><br>
<input type="submit" name="sub">
</form>
<?php
if(isset($_POST['sub'])){
	$name = $_POST['uname'];
	if(strlen($name) > 3 && strlen($name) <9){
		echo "valid username.<br>";
	}
	else{
		echo "invalid username. should be between 4 to 8 char!";
	}

	/* this is for email */
	$email = $_POST['uemail'];
	
	/* this is method 1
	if(stristr($email,'@') && stristr($email,'.')){
		echo "valid email";
	}else{
		echo "invalid email";
	} */
	
	/* this is method 2 */
	$ppattern = "/\S+@\S+\.\S+/";
	if(preg_match($ppattern,$email)){
		echo "valid email";
	}
	else{
		echo "invalid email";
	}
	
	
	/* / this is for email */
}
?>
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
</html>