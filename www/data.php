<?php

include('inc/dns.php');
echo ClassDNS::get_dns_ip($_GET['data']);
$ip_dns = ClassDNS::get_dns_ip($_GET['data']);
echo $ip_dns;
