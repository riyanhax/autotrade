<?php
return array(
	'enable' => true,
    'general' => array(
        'root_url' => 'https://test.maatschappelijkwerkonline.nl/testing/bot/',
    ),
    'database' => array(
        '1' => array(
            'host' => 'localhost',
            'port' => '3306',
            'user' => 'maatschappelijkwerkonline.nl.us',
            'pass' => '9XAwTHhb8sDofGbl',
            'name' => 'test-11_maatschappelijkwerkonline.nl.db',
            'table_prefix' => '',
            'encoding' => 'utf8mb4',
        ),
    ),
    'bitmex' => array(
        'root_url' => 'https://www.bitmex.com/',
        'accounts' => array(
        	'1' => array(
                'email' => 'longersoft@gmail.com',
                'apiKey' => 'lyzxA2gWt0-EjYND8DZtEcWZ',
                'apiSecret' => 'xk8CTwrE3VO3CbUIIvQf1kU3YIG04k09Qy0tIZ8Cg99-4_wd',
            ),
            '2' => array(
                'email' => 'long.vu0104@gmail.com',
                'apiKey' => 'q1KYRfGHroeROIjRvdsvhJqv',
                'apiSecret' => 'iCiuNYv_F4rdZkkc2R89bzMLb5KkkINkIkXHpEnN8sp1DEi3',
            ),
            '3' => array(
                'email' => 'signvltk1@gmail.com',
                'apiKey' => 'P5RaBUJ-8NZsxG_E5x5p6C_B',
                'apiSecret' => 'FZ-zqEpiqVPlHOtBu4rMbwx26ZeRoZbQ-RzSiyGv6E9c9epy',
            ),
            '4' => array(
                'email' => 'longv840401@gmail.com',
                'apiKey' => 'a9T-PqllrCELpglFdNNQsdXP',
                'apiSecret' => '6PrXXPhC2BIr8kzvlI0Rl7YzK3Pn3GhDEkkpSW2gy0mDwUtn',
            ),
            '5' => array(
                'email' => 'longvu8441@gmail.com',
                'apiKey' => 'FfKx77-t-OIdcuTyJ7nQHhlC',
                'apiSecret' => 'lmhwocr3w-fDnBIzU95o8v3wqTisWJpoC42dGiSaGTWFn4hq',
            ),
            '6' => array(
                'email' => 'long.vu@sunbytes.vn',
                'apiKey' => 'TuyDGdoHeK_toQB8-iDP1OoA',
                'apiSecret' => 'rm2vVgKwiMedGXX50cul__rhEH-ZJxuv-Duo9OGCBoKexFYA',
            ),
        ),
    ),
	'houbi' => array(
        'root_url' => 'https://www.huobi.com/',
        'accounts' => array(
            '1' => array(
                'uid' => 37921108,
                'uuid' => 'E266ACFDA86F2007067235AE1E002F5985769568096FA464CA5DB8DF357A9242',
                'userId' => 3792110,
                'email' => 'longersoft@gmail.com',
                'note' => 'longersoft@gmail.com',
                'apiKey' => '3606b44b-5ee91e14-aa63634c-5682d',
                'apiSecret' => '422cade3-55f95051-2760ade9-cd57e',
            ),
            '2' => array(
                'uid' => 37921108,
                'uuid' => 'E266ACFDA86F2007067235AE1E002F5985769568096FA464CA5DB8DF357A9242',
                'userId' => 3792110,
                'email' => 'longersoft@gmail.com',
                'note' => 'houbi_api',
                'apiKey' => '657987ef-10b0fe14-7d4c6ca3-b23c2',
                'apiSecret' => 'bdce1da7-68f3c40b-2e346c48-8a2b4',
            ),
        ),
    ),
    'binance' => array(
        'root_url' => 'https://www.binance.com/',
        'accounts' => array(
    	    '1' => array(
                'email' => 'longersoft@gmail.com',
                'apiKey' => 'EKQuqdZECTzhL0sqloEkhN3yJdqgayMooFH48cM6gVASAODGnyINbZNzQwtzmp5j',
                'apiSecret' => 'nolDDScsMdUS24j7U1J3ZL6giqINL3AbhE4xAMBW4fm8Sdo7DftYYQdyjhVS58wl',
            ),
            '2' => array(
                'email' => 'signvltk1@gmail.com',
                'apiKey' => 'ZYPc7p6jvrOPeRlaYkFgDksNlCICEpTrmpppNmtNxZOGPap8N4af0vLw3sk3d2Bs',
                'apiSecret' => '7BNMudjCqsdMtkUxrBkgK5hRqZmRwevXyxQ6U62StzOYXBWLaHuLhByUJ6f4CCZc',
            ),
        ),
	),
	'bittrex' => array(
        'root_url' => 'https://bittrex.com/',
        'accounts' => array(
    	    '1' => array(
                'email' => 'longersoft@gmail.com',
                'apiKey' => 'af0a064732024600b00f54442a6907c5',
                'apiSecret' => 'ab8d1c6e472d4a8c80814f7bfea72cb4',
            ),
        ),
	),
    'hitbtc' => array(
        'root_url' => 'https://hitbtc.com/',
        'accounts' => array(
            '1' => array(
                'email' => 'longersoft@gmail.com',
                'apiKey' => '02f579ffe38442e597470a2e92475e21',
                'apiSecret' => 'c24a87babb78495e6e43171bf4291767',
            ),
        ),
    ),
    'coinexchange' => array(
        'root_url' => 'https://www.coinexchange.io/',
        'accounts' => array(
            '1' => array(
                'email' => 'longersoft@gmail.com',
                'apiKey' => '',
                'apiSecret' => '',
            ),
        ),
    ),
	'telegram' => array(
    	'main' => array(
            'id' => '475001958',
            'api' => 'https://api.telegram.org/',
            'root_url' => 'https://telegram.org/',
        ),
        'bots' => array(
            'root_url' => 'https://test.maatschappelijkwerkonline.nl/testing/bot/telegram/bots/',
            '1' => array(
                'id' => '696118749',
                'name' => 'Boss Baby Notifier Bot',
                'username' => 'boss_baby_notifier_bot',
                'token' => '696118749:AAGofvL9n2Xp-LhBd-jut_QgmnUKV0AsMro',
                'max_connections' => 40,
                'root_url' => 'https://test.maatschappelijkwerkonline.nl/testing/bot/telegram/bots/boss_baby_notifier_bot/'
            ),
            '2' => array(
                'id' => '669289813',
                'name' => 'Boss Baby Main Bot',
                'username' => 'boss_baby_xbot',
                'token' => '669289813:AAFqt7B2POV1yozQzKRmFnFbfAArrh4-VTo',
                'max_connections' => 40,
                'root_url' => 'https://test.maatschappelijkwerkonline.nl/testing/bot/telegram/bots/boss_baby_xbot/'
            ),
        ),
        'channels' => array(
            '1' => array(
                'id' => -1001385457186,
                'name' => 'Boss Baby BOT',
                'username' => 'channel_boss_baby',
                'root_url' => 'https://t.me/channel_boss_baby',
            ),
            '2' => array(
                'id' => -1001393367903,
                'name' => 'Boss Baby Coinpulse Binance',
                'username' => 'channel_coin_pulse_binance',
                'root_url' => 'https://t.me/channel_coin_pulse_binance',
            ),
            '3' => array(
                'id' => -1001379801333,
                'name' => 'Boss Baby Coinpulse Bittrex',
                'username' => 'channel_coin_pulse_bittrex',
                'root_url' => 'https://t.me/channel_coin_pulse_bittrex',
            ),
            '4' => array(
                'id' => -1001337969406,
                'name' => 'Boss Baby Tweets',
                'username' => 'channel_boss_baby_tweets',
                'root_url' => 'https://t.me/channel_boss_baby_tweets',
            ),
            '5' => array(
                'id' => -1001246511258,
                'name' => 'Boss Baby Full Tweets',
                'username' => 'channel_boss_baby_full_tweets',
                'root_url' => 'https://t.me/channel_boss_baby_full_tweets',
            ),
            '6' => array(
                'id' => -1001277026605,
                'name' => 'Boss Baby Coin Volume',
                'username' => 'channel_boss_baby_coin_volume',
                'root_url' => 'https://t.me/channel_boss_baby_coin_volume',
            ),
            '7' => array(
                'id' => -1001192365682,
                'name' => 'Boss Baby Coinpulse HoubiPro',
                'username' => 'channel_coin_pulse_houbipro',
                'root_url' => 'https://t.me/channel_coin_pulse_houbipro',
            ),
        ),
        'groups' => array(
            '1' => array(
                'id' => -285042211,
                'name' => 'Boss Baby BOT',
                'username' => '',
                'root_url' => '',
            ),
            '2' => array(
                'id' => -236373407,
                'name' => 'Boss Baby Bitmex',
                'username' => '',
                'root_url' => '',
            ),
            '3' => array(
                'id' => -1001178093869,
                'name' => 'BítMết',
                'username' => '',
                'root_url' => '',
            ),
        ),
        'users' => array(
            '1' => array(
                'id' => '396515524',
                'name' => 'Cá Nóc',
                'username' => '',
                'root_url' => '',
            ),
            '2' => array(
                'id' => '553436063',
                'name' => 'C2',
                'username' => 'Bep127',
                'root_url' => '',
            ),
            '3' => array(
                'id' => '285042211',
                'name' => 'D',
                'username' => 'dnm102',
                'root_url' => '',
            ),
        ),
	),
    'discord' => array(
        'main' => array(
            'id' => '403068373614723073',
            'api' => 'https://discordapp.com/api/',
            'root_url' => 'https://discordapp.com/',
        ),
        'bots' => array(
            '1' => array(
                'id' => '489707713744338965',
                'name' => '',
                'username' => 'channel_coin_pulse_binance',
                'token' => '3ul4cW9gNEDOo-dX_iMPXaQ70R5zS6YmW8CGqL-ap6RaLh9J0bVM6t7KGIb35ck9LSF3',
                'webhook_url' => 'https://discordapp.com/api/webhooks/489707713744338965/3ul4cW9gNEDOo-dX_iMPXaQ70R5zS6YmW8CGqL-ap6RaLh9J0bVM6t7KGIb35ck9LSF3',
            ),
            '2' => array(
                'id' => '489707924176764930',
                'name' => '',
                'username' => 'channel_coin_pulse_bittrex',
                'token' => 'TLsRlfGUwyh4oTKN3DqXOlxD_H4GTzt9KWxEsTZfxfeki7ZkmHZPmAv5QPp3PXEOFSQy',
                'webhook_url' => 'https://discordapp.com/api/webhooks/489707924176764930/TLsRlfGUwyh4oTKN3DqXOlxD_H4GTzt9KWxEsTZfxfeki7ZkmHZPmAv5QPp3PXEOFSQy',
            ),
            '3' => array(
                'id' => '489708645140135936',
                'name' => '',
                'username' => 'twitter_feeds',
                'token' => 'KSgW2poIyPDt43K6teB4EIEqgMXxuSiP18wZXQoWz9BbSGr2NsRq8B_mSje4-a8BNidz',
                'webhook_url' => 'https://discordapp.com/api/webhooks/489708645140135936/KSgW2poIyPDt43K6teB4EIEqgMXxuSiP18wZXQoWz9BbSGr2NsRq8B_mSje4-a8BNidz',
            ),
            '4' => array(
                'id' => '489708780406177794',
                'name' => '',
                'username' => 'tweets_full',
                'token' => 'RHXJv8LcQp4jdrtVFI8D3aWeUiomInNxd8zlVxwC75O1ltBa-KOTmt3n4nwL_op7usud',
                'webhook_url' => 'https://discordapp.com/api/webhooks/489708780406177794/RHXJv8LcQp4jdrtVFI8D3aWeUiomInNxd8zlVxwC75O1ltBa-KOTmt3n4nwL_op7usud',
            ),
            '5' => array(
                'id' => '489712943706013696',
                'name' => '',
                'username' => 'channel_coin_pulse_houbipro',
                'token' => 'lr_ouRpzf-_aLs9E4xjfBGwW4-TSP9mM8v3uW1CVIyxXUxIkP3DR7tGphUXa_vVB865U',
                'webhook_url' => 'https://discordapp.com/api/webhooks/489712943706013696/lr_ouRpzf-_aLs9E4xjfBGwW4-TSP9mM8v3uW1CVIyxXUxIkP3DR7tGphUXa_vVB865U',
            ),
            '6' => array(
                'id' => '489713359059419148',
                'name' => '',
                'username' => 'channel_coin_vol_binance',
                'token' => 'cR7vkGIo03UAkeQOOqnp2vdfWmdRJA7VjAScSpd3nafOu8Xg6xdyahaU8YLlVXgWAMZd',
                'webhook_url' => 'https://discordapp.com/api/webhooks/489713359059419148/cR7vkGIo03UAkeQOOqnp2vdfWmdRJA7VjAScSpd3nafOu8Xg6xdyahaU8YLlVXgWAMZd',
            ),
            '9' => array(
                'id' => '472078161786437640',
                'name' => '',
                'username' => 'BossBabyTest',
                'token' => 'y3KOcJDG6q7qmqdkXgGpr_amxdgEQN7ZKwoln1tNS9bYkvb-Okr8TZQaeviSkvPSFQZi',
                'webhook_url' => 'https://discordapp.com/api/webhooks/472078161786437640/y3KOcJDG6q7qmqdkXgGpr_amxdgEQN7ZKwoln1tNS9bYkvb-Okr8TZQaeviSkvPSFQZi',
            ),
        ),
        'guild' => array(
            '1' => array(
                'id' => '475344557228294154',
                'name' => '',
                'username' => '',
                'root_url' => 'https://discordapp.com/channels/475344557228294154',
            ),
        ),
        'channels' => array(
            '1' => array(
                'id' => '475573108137263134',
                'name' => 'channel_coin_pulse_binance',
                'username' => 'channel_coin_pulse_binance',
                'root_url' => 'https://discordapp.com/channels/475344557228294154/475573108137263134',
            ),
            '2' => array(
                'id' => '475877642999037952',
                'name' => 'channel_coin_pulse_bittrex',
                'username' => 'channel_coin_pulse_bittrex',
                'root_url' => 'https://discordapp.com/channels/475344557228294154/475877642999037952',
            ),
            '3' => array(
                'id' => '475880034687516687',
                'name' => 'twitter_feeds',
                'username' => 'twitter_feeds',
                'root_url' => 'https://discordapp.com/channels/475344557228294154/475880034687516687',
            ),
            '4' => array(
                'id' => '476312881365778433',
                'name' => 'tweets_full',
                'username' => 'twitter_feeds',
                'root_url' => 'https://discordapp.com/channels/475344557228294154/476312881365778433',
            ),
            '5' => array(
                'id' => '475877642999037952',
                'name' => 'channel_coin_pulse_houbipro',
                'username' => 'channel_coin_pulse_houbipro',
                'root_url' => 'https://discordapp.com/channels/475344557228294154/475877642999037952',
            ),
        ),
    ),
    'twitter' => array(
        'main' => array(
            'id' => '403068373614723073',
            'root_url' => 'https://twitter.com/',
        ),
        'accounts' => array(
            '1' => array(
                'id' => '1600496436',
                'name' => 'Long Vu',
                'username' => 'longersoft',
                'email' => 'longersoft@gmail.com',
            ),
            '2' => array(
                'id' => '44592652',
                'name' => 'signvltk1',
                'username' => 'signvltk1',
                'email' => 'signvltk1@gmail.com',
            ),
        ),
        'apps' => array(
            '1' => array(
                'id' => '3440727',
                'name' => 'signvltk1',
                'apiKey' => 'Z3emNW7OyH190xO6K4dusQ',
                'apiSecret' => 'twSkjQIFh2a9VFiuBfgh7nh9y5q6CdhRuYP9LRsB5M',
                'accessToken' => '44592652-uSZxfBQ1SdVU2gT60dOYHDmnGPprJscYjim9jOJMF',
                'accessTokenSecret' => 'OW1r1fSc6h56Lu5lPCnDqLa0faMJRYxAXvDvJdknWZsSQ',
                'root_url' => 'https://apps.twitter.com/app/3440727/',
            ),
            '2' => array(
                'id' => '3440727',
                'name' => 'signvltk1',
                'apiKey' => 'Z3emNW7OyH190xO6K4dusQ',
                'apiSecret' => 'twSkjQIFh2a9VFiuBfgh7nh9y5q6CdhRuYP9LRsB5M',
                'accessToken' => '44592652-uSZxfBQ1SdVU2gT60dOYHDmnGPprJscYjim9jOJMF',
                'accessTokenSecret' => 'OW1r1fSc6h56Lu5lPCnDqLa0faMJRYxAXvDvJdknWZsSQ',
                'root_url' => 'https://apps.twitter.com/app/3440727/',
            ),
        ),
    ),
    'coinmarketcal' => array(
        'accounts' => array(
            'id' => '403068373614723073',
            'client_id' => '1091_wg08zglp9tcso8s4w4gc4k0wcokgskg4s08kw48kc0wwo8kcw',
            'client_secret' => '2gegflddipc040s84sc8kkg4sgcg4gkc8k84kwo8gg80ksskow',
            'access_token' => 'YmI0MjljOThhY2I1NzFmYWQyNjNmYzU5MGRkODQxMjg5OTYyZjc4ZDFhOWRhODZlMjg0OGVmMmY0N2JjNWQxYw',
            'root_url' => 'https://api.coinmarketcal.com/',
        ),
    ),
);
