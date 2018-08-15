<?php
/**
 * This file is part of the TelegramBot package.
 *
 * (c) Avtandil Kikabidze aka LONGMAN <akalongman@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Longman\TelegramBot\Commands\UserCommands;

use Longman\TelegramBot\Commands\Command;
use Longman\TelegramBot\Commands\UserCommand;
use Longman\TelegramBot\Request;

/**
 * User "/twitter" command
 *
 * Command that processing everything about Binance
 */
class BinanceCommand extends UserCommand
{
    /**
     * @var string
     */
    protected $name = 'binance';

    /**
     * @var string
     */
    protected $description = 'Processing Binance';

    /**
     * @var string
     */
    protected $usage = '/binance or /binance <command>';

    /**
     * @var string
     */
    protected $version = '1.0.0';

    /**
     * @var bool
     */
    protected $need_mysql = false;

    /**
     * @inheritdoc
     */
    public function execute()
    {
        // \BossBaby\Utility::writeLog(__FILE__ . '::' . __FUNCTION__ . '::' . date('YmdHis'));

        $message   = $this->getMessage();
        $chat_id   = $message->getChat()->getId();

        $data = [
            'chat_id'    => $chat_id,
            'parse_mode' => 'markdown',
        ];
        
        $text = trim($message->getText(true));
        $text = str_replace('/', '', $text);

        // chart coin
        if (stripos(str_replace('/binance ', '', $text), 'binance ') !== false) {
            $text = str_replace('binance ', '', str_replace('/binance ', '', $text));
        }

        // Get global environment
        global $environment;

        // If no command parameter is passed, show the list.
        if ($text === '' or $text === 'binance') {
            // $data['text'] = PHP_EOL;

            // Get balance on Binance
            $binance_balances = \BossBaby\Telegram::get_binance_balances();

            $text = '';
            if (is_array($binance_balances) and count($binance_balances)) {
                foreach ($binance_balances as $coin => $data) {
                    $text .= PHP_EOL . $coin;
                    foreach ($data as $item) {
                        $text .= PHP_EOL . $item['available'];
                        $text .= PHP_EOL . $item['onOrder'];
                        $text .= PHP_EOL . $item['btcValue'];
                    }
                    $text .= PHP_EOL;
                }

                $data['text'] = $text;
                return Request::sendMessage($data);
            }
        }

        $data['text'] = 'Please try again 😒';

        // // Format current ALT's price
        // $price = \BossBaby\Telegram::format_alt_price_for_telegram($text);
        // if ($price) {
        //     $data['text'] = $price;
        //     return Request::sendMessage($data);
        // }
        
        $data['text'] .= PHP_EOL;
        return Request::sendMessage($data);
    }
}
