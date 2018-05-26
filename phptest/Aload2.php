<?php

class rabbitmq_consume
{

    public function run()
    {
        $bindingkey = 'test_send_key';
//连接RabbitMQ
        $conn_args = array(
            'host' => 'api.corp.anjuke.test',
            'port' => '5676',
            'login' => 'nydus',
            'password' => 'nydus',
            'vhost' => '/'
        );
        $conn = new AMQPConnection($conn_args);
        $conn->connect();
//设置queue名称，使用exchange，绑定routingkey
        $channel = new AMQPChannel($conn);
        $this->queue = new AMQPQueue($channel);
        $this->queue->setName('matt_exchange');
        $this->queue->setFlags(AMQP_DURABLE);
        $this->queue->declare();
        $this->queue->bind('matt_exchange', $bindingkey);
//消息获取
        $this->queue->consume(array($this, 'what_callback'));

    }

//$conn->disconnect();
    function what_callback($msg)
    {
        if ($msg) {
            $this->queue->ack($msg->getDeliveryTag());
            $msg = json_decode($msg->getBody(), true);
            echo " success \n";
            file_put_contents('/data1/logs/v2/mq_consume' . date('Ymd') . '.log', "\n" . date('Y-m-d H:i:s') . "-----publish result START:\t\n" . var_export($msg, true) . "\n" . "\n-----publish result END\t\n", FILE_APPEND);
        } else {
            echo "---------- failed \n";
        }
    }
}

$mq = new rabbitmq_consume();
$mq->run();
?>