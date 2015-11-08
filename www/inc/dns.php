<?php

define('DOMAIN', 'domain.com');

class ClassDNS {

    static public function mt_rand_str($max = 14) {
        $array_symbol = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
            'n', 'o', 'p', 'r', 's', 't', 'u', 'v', 'x', 'y', 'z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
        $subdomain = "";
        for ($i = 0; $i < $max; $i++) {
            $index = rand(0, count($array_symbol) - 1);
            $subdomain .= $array_symbol[$index];
        }
        return $subdomain;
    }

    public static function rand_domain() {
        return self::mt_rand_str(14) . "." . DOMAIN;
    }

    public static function get_ip() {
        return $_SERVER['REMOTE_ADDR'];
    }

    public static function get_dns_ip($domain) {
        exec('grep ' . $domain . ' /var/log/named/named.log', $data);
        if ($data[0]) {
            preg_match_all("|client (.*)#|U", $data[0], $ip);
            $dns_ip = $ip[1][0];
            return $dns_ip;
        }
    }

}
