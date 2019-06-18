<?php


namespace App\Workerman;


use GatewayWorker\Lib\Gateway;

class Events
{
    public static function onWorkerStart($businessWorker)
    {
    }

    public static function onConnect($client_id)
    {
        global $num;
        // 向当前client_id发送数据
        Gateway::sendToClient($client_id, "Hello $client_id\r\n");
        // 向所有人发送
        Gateway::sendToAll("$client_id login\r\n");
        echo 'connect'.++$num.":".$client_id."\n";
    }

    public static function onWebSocketConnect($client_id, $data)
    {
    }

    public static function onMessage($client_id, $message)
    {
        // 向所有人发送
        Gateway::sendToAll("$client_id said $message\r\n");
    }

    public static function onClose($client_id)
    {
    }
}
