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
 * User "/menu" command
 *
 * Command that lists all available commands and displays them in User and Admin sections.
 */
class MenuCommand extends UserCommand
{
    /**
     * @var string
     */
    protected $name = 'menu';

    /**
     * @var string
     */
    protected $description = 'Show bot commands help';

    /**
     * @var string
     */
    protected $usage = '/menu';

    /**
     * @var string
     */
    protected $version = '1.3.0';

    /**
     * @inheritdoc
     */
    public function execute()
    {
        $message     = $this->getMessage();
        $chat_id     = $message->getChat()->getId();
        
        // Admin commands shouldn't be shown in group chats
        $safe_to_show = $message->getChat()->isPrivateChat();

        $data = [
            'chat_id' => $chat_id,
            'parse_mode' => 'markdown',
        ];

        // // Works
        // $keyboard = array(
        //     "inline_keyboard" => array(array(array("text" => "My Button Text", "callback_data" => "myCallbackData")))
        // );
        // $data['reply_markup'] = $keyboard;
        
        $data['text'] = '*Danh sách các lệnh có thể dùng*:' . PHP_EOL;
        $data['text'] .= PHP_EOL;
        // $data['text'] .= '/start - cái này khỏi nói làm gì' . PHP_EOL;
        // $data['text'] .= '/menu - hiển thị danh sách lệnh có thể dùng' . PHP_EOL;
        $data['text'] .= '/price - xem giá coin, mặc định là BTC' . PHP_EOL;
        $data['text'] .= PHP_EOL;
        $data['text'] .= 'tạm thời vậy thôi!!!' . PHP_EOL;

        return Request::sendMessage($data);
    }
}