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

use Longman\TelegramBot\Commands\UserCommand;
use Longman\TelegramBot\Request;

/**
 * Price command
 *
 * Gets executed when a user check price
 */
class PriceCommand extends UserCommand
{
    /**
     * @var string
     */
    protected $name = 'price';

    /**
     * @var string
     */
    protected $description = 'Price command';

    /**
     * @var string
     */
    protected $usage = '/price or /price <coin>';

    /**
     * @var string
     */
    protected $version = '1.1.0';

    /**
     * Command execute method
     *
     * @return \Longman\TelegramBot\Entities\ServerResponse
     * @throws \Longman\TelegramBot\Exception\TelegramException
     */
    public function execute()
    {
        $message   = $this->getMessage();
        $chat_id   = $message->getChat()->getId();

        $data = [
            'chat_id'    => $chat_id,
            'parse_mode' => 'markdown',
        ];

        // // Get current config
        // global $environment;

        $coin_name = trim($message->getText(true));
        $coin_name = str_replace('/', '', $coin_name);

        // If no command parameter is passed, show the list.
        if ($coin_name === '') {
            // $data['text'] = PHP_EOL;

            // Format current XBT's price
            $price = \BossBaby\Telegram::format_xbt_price_for_telegram();

            $data['text'] = $price . PHP_EOL;
            return Request::sendMessage($data);
        }

        $data['text'] = 'Làm gì có *' . $coin_name . '*, thử lại coi 😒';

        // Format current ALT's price
        $price = \BossBaby\Telegram::format_alt_price_for_telegram($coin_name);
        if ($price) {
            $data['text'] = $price;
            return Request::sendMessage($data);
        }
        
        $data['text'] .= PHP_EOL;
        return Request::sendMessage($data);
    }
}
