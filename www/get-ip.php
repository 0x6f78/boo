<?php
function getUserIP() {
    $ipKeys = [
        'HTTP_CF_CONNECTING_IP',
        'HTTP_X_FORWARDED_FOR', 
        'HTTP_X_REAL_IP',         
        'REMOTE_ADDR'    
    ];
    foreach ($ipKeys as $key) {
        if (!empty($_SERVER[$key])) {
            $ip = $_SERVER[$key];
            if (strpos($ip, ',') !== false) {
                $ip = trim(explode(',', $ip)[0]);
            }
            if (filter_var($ip, FILTER_VALIDATE_IP)) {
                return $ip;
            }
        }
    }
    return 'Hmm, sniffa not sniffing..';
}
?>
