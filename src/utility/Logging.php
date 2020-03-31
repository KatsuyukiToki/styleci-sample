<?php

namespace App\Utility;

use Cake\Log\Log;

/**
 * CakePHP ログ関係
 */
class Logging extends Log
{
    /**
     * Criticalレベルのログを出力する。
     *
     * @param string ログに出力するエラー内容を示す文。
     * @param array $context CakePHP3のLogに準ずる
     */
    public static function criticalLog(string $message, $context = []): void
    {
        Log::write(LOG_CRIT, $message, $context);
    }

    /**
     * ERRORレベルのログを出力する。
     *
     * @param string ログに出力するエラー内容を示す文。
     * @param array $context CakePHP3のLogに準ずる
     * @return void
     */
    public static function errorLog(string $message, $context = []): void
    {
        Log::write(LOG_ERR, $message, $context);
    }

    /**
     * WARNINGレベルのログを出力する。
     *
     * @param string ログに出力するエラー内容を示す文。
     * @param array $context CakePHP3のLogに準ずる
     * @return void
     */
    public static function warningLog(string $message, $context = []): void
    {
        Log::write(LOG_WARNING, $message, $context);
    }

    /**
     * NOTICEレベルのログを出力する。
     *
     * @param string ログに出力するエラー内容を示す文。
     * @param array $context CakePHP3のLogに準ずる
     * @return void
     */
    public static function noticeLog(string $message, $context = []): void
    {
        Log::write(LOG_NOTICE, $message, $context);
    }

    /**
     * INFOレベルのログを出力する。
     *
     * @param string ログに出力するエラー内容を示す文。
     * @param array $context CakePHP3のLogに準ずる
     * @return void
     */
    public static function infoLog(string $message, $context = []): void
    {
        Log::write(LOG_INFO, $message, $context);
    }

    /**
     * DEBUGレベルのログを出力する。
     *
     * @param string ログに出力するエラー内容を示す文。
     * @param array $context CakePHP3のLogに準ずる
     * @return void
     */
    public static function debugLog(string $message, $context = []): void
    {
        Log::write(LOG_DEBUG, $message, $context);
    }
}
