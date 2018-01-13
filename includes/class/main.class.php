<?php

// Main website functions go in this class

Class Main {
  
  public static function faucetList()
    {
        global $f_request_type, $f_purge_cache, $f_limit_reached, $f_request_limit;

        $f_cache_file = dirname(__FILE__) . '/faucets.json';
        $f_expires    = time() - '6000';

        if (!file_exists($f_cache_file))
            die("Cache file is missing: $f_cache_file");

        if (filectime($f_cache_file) < $f_expires || file_get_contents($f_cache_file) == '' || $f_purge_cache && intval($_SESSION['views']) <= $f_request_limit) {

            $f_api_results  =  json_decode(file_get_contents('https://faucetlist.me/api.php'), 2);
            $f_json_results = json_encode($f_api_results, JSON_UNESCAPED_SLASHES);

            if ($f_api_results && $f_json_results)
                file_put_contents($f_cache_file, $f_json_results);
            else
                unlink($f_cache_file);
        } else {

            $f_json_results = file_get_contents($f_cache_file);
            $f_request_type = 'JSON';
        }

        return json_decode($f_json_results, 2);
    }

}

?>
