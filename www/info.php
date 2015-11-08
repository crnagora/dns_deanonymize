<?php
include('inc/dns.php');
$domain = ClassDNS::rand_domain();
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" media="all" href="http://<?php echo $domain; ?>/css/info.css">
        <script src="http://<?php echo $domain; ?>/js/info.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </head>
    <body>
        <img alt="" height="1" width="1" src="http://<?php echo $domain; ?>/i/info.gif">
        <br />
        <script language="javascript">
            (function ($) {
                $(function () {
                    $("#dns").load("/data.php?data=<?php echo $domain; ?>");
                })
            })(jQuery)
        </script>
        Your ip: <?php echo ClassDNS::get_ip(); ?><br />
        Your DNS ip: <span id="dns"></span>
    </body>
</html>