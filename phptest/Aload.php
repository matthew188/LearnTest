<?php
$routingkey = 'test_send_key';
//设置你的连接
$conn_args = array(
    'host' => 'api.corp.anjuke.test',
    'port' => '5676',
    'login' => 'nydus',
    'password' => 'nydus',
);
$conn = new AMQPConnection($conn_args);
if ($conn->connect()) {
    echo "Established a connection to the broker \n";
} else {
    echo "Cannot connect to the broker \n ";
}
//你的消息
//$message = json_encode(array('Hello World3!','change' ,  'c++3:'));
//创建channel
$channel = new AMQPChannel($conn);
//创建exchange
$ex = new AMQPExchange($channel);
$ex->setName('matt_exchange');//创建名字
$ex->setType(AMQP_EX_TYPE_DIRECT);
$ex->setFlags(AMQP_DURABLE);
//$ex->setFlags(AMQP_AUTODELETE);
//echo "exchange status:".$ex->declare();
echo "exchange status:" . $ex->declareExchange();
echo "\n";
for ($i = 0; $i < 200000; $i++) {
    $message = json_encode(array('Hello World'.$i));
    $result = $ex->publish($message, $routingkey);
    file_put_contents('/data1/logs/v2/mq_send'.date('Ymd').'.log', "\n".date('Y-m-d H:i:s')."-----publish result ".$i." START:\t\n".var_export($result, true)."\n"."\n-----publish result END\t\n", FILE_APPEND);
}

