;
; BIND data file for local loopback interface
;
$TTL    604800
@       IN      SOA     domain.com. root.domain.com. (
                              1         ; Serial
                         604800         ; Refresh
                          86400         ; Retry
                        2419200         ; Expire
                         604800 )       ; Negative Cache TTL
;
@       IN      NS      ns1.domain.com.
@       IN      NS      ns2.domain.com.
ns1     IN      A       11.22.33.44
ns2     IN      A       11.22.33.44
@       IN      A       11.22.33.44
*       IN      A       11.22.33.44
www     IN      A       11.22.33.44