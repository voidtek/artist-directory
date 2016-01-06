<?php 
// app/config/my_session.php

ini_restore('session.referer_check');
ini_set('session.use_trans_sid', 0);
ini_set('session.name', Configure::read('Session.cookie'));
ini_set('session.cookie_lifetime', 3600);
ini_set('session.cookie_path', '/');
ini_set('session.cookie_domain', 'you-art-here.com');

?>