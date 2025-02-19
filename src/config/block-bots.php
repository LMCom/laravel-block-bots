<?php

return [

    /*
     * Enable / disable firewall
     *
     */

    'enabled' => env('BLOCK_BOTS_ENABLED', true),

    'mode' => env('BLOCK_BOTS_MODE', 'production'),

    'use_default_allowed_bots' => env('BLOCK_BOTS_USE_DEFAULT_ALLOWED_BOTS', true),

    'whitelist_key' => env('BLOCK_BOTS_WHITELIST_KEY', "block_bot:whitelist"),

    'fake_bot_list_key' => env('BLOCK_BOTS_FAKE_BOTS_KEY', "block_bot:fake_bots"),

    'pending_bot_list_key' => env('BLOCK_BOTS_PENDING_BOTS_KEY', "block_bot:pending_bots"),


    'ip_info_key' => env('BLOCK_BOTS_IP_INFO_KEY', null),

    'whitelist_ips' => [
        '127.0.0.1',
        '::1'
    ],

    /*
     * Log channel
     */
    'channels_info' => [
        'single'
    ],

    /*
     * This Log channel will receive when a bad crawler is detected or someone is banned
     */
    'channels_blocks' => [
        'single'
    ],

    /*
     * Send suspicious events to log?
     *
     */

    'log' => env('BLOCK_BOTS_LOG_ENABLED', env('BLOCK_BOTS_LOG_BLOCKED_REQUESTS', true)),
    'log_only_guest' => env('BLOCK_BOTS_LOG_ONLY_GUEST', true),

    /*
     * The list of allowed user agents.
     * The key should be a substring of the user agent string.
     * The value should be a substring of the hostname. The hostname is determined from the IP via reverse DNS lookup.
     * This is to ensure that the supposed bot does not use a fake user agent string and is actually operating from
     * a known organisation. Use "*" to consider any hostname to be valid.
     */
    'allowed_bots' => [
        'ahrefs' => 'ahrefs',
        'alexa' => 'alexa',
        'ask' => 'ask',
        'baidu' => 'baidu',
        'bing' => 'msn.com',
        'duckduck' => '*',
        'exabot' => 'exabot',
        'facebook' => 'facebook',
        'google' => 'google',
        'msn' => 'msn',
        'msnbot' => 'msn.com',
        'sogou' => 'sogou',
        'soso' => 'soso',
        'twitter' => 'twitter',
        'yahoo' => 'yahoo',
        'yandex' => 'yandex',
    ],

    /*
     * Default json response when blocked
     */
    'json_response' => [
        'message' => 'Request limit reached.'
    ],
];
