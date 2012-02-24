<html>
	<head>
		<title>Studymaterial Downloads</title>
	</head>
<body>
<h3>Microprocessor</h3><hr>
<a href="/uploads/8089.ppt">PPT by Sivachandran Sir</a><br/>
<a href="/uploads/micro_processor_UT2.txt">Question Bank</a>
<br>
<hr><hr>
<br/>
<h3>DBMS</h3><hr>
<a href="/uploads/nf.ppt">Normal Forms by Sujatha Ma'am</a>
<br/>
<hr><hr>
<br/>

</body>
</html>
<!-- Place this tag where you want the +1 button to render -->
<g:plusone annotation="inline"></g:plusone>

<!-- Place this render call where appropriate -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-1714481115589993";
/* studies */
google_ad_slot = "2438585751";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<?php
date_default_timezone_set("Asia/Calcutta");
$ip = $_SERVER['REMOTE_ADDR'];
$hostaddress = gethostbyaddr($ip);
$browser = $_SERVER['HTTP_USER_AGENT'];
$referred = $_SERVER['HTTP_REFERER']; // a quirky spelling mistake that stuck in php
$time = date("H:i:s");

$myfile = "visit_log.txt" or die("can't open file");
$fh = fopen($myfile, 'a');
$stringData = "$time $ip $hostaddress $browser $referred\n";

fseek($fh, 0);
fwrite($fh, $stringData);
fclose($fh);
?>
