<?php
/**
 * README
 * This configuration file is intended to run a list of commands with crontab.
 * Uncommented parameters must be filled
 */

if (!defined('STDIN')) die('Access denied.' . "\n");

// Error handle
require_once __DIR__ . '/../error-handle.php';

run_cron();
$sleep = 10;
sleep($sleep); run_cron();
sleep($sleep); run_cron();
sleep($sleep); run_cron();
sleep($sleep); run_cron();

function run_cron() {
    // Run cron to update coin from exchange
    $tmp = \BossBaby\Bittrex::get_list_coin();
    // \BossBaby\Utility::writeLog('tmp:'.serialize($tmp));

    if ($tmp) {
        $arr = [];
        $arr['symbols'] = [];
        $arr['last_updated'] = date('Y-m-d H:i:s');
        $arr['last_updated_unix'] = time();

        foreach ($tmp as $pos => $item) {
            $coin = $item['MarketName'];
            $tmp_name = explode('-', $coin);
            if ($tmp_name and isset($tmp_name[0]) and isset($tmp_name[1])) {
                $coin = $tmp_name[1] . $tmp_name[0];
            }
            $arr['symbols'][$coin] = $item;
            $arr['symbols'][$coin]['price'] = $item['Last'];
            $arr['symbols'][$coin]['volume'] = $item['Volume'];
        }
        unset($tmp);

        if ($arr) {
            // File store coin data
            $file = CONFIG_DIR . '/bittrex_coins.php';
            // \BossBaby\Utility::writeLog('file:'.serialize($file));

            // Write overwrite to file
            \BossBaby\Config::write($file, $arr);
            unset($arr);
            sleep(1);

            die('UPDATED');
        }
    }

    die('NOTHING');
}
