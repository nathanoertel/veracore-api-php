<?php
namespace VeraCoreAPI;

class Orders extends AbstractSOAPRequest {
    private static $client = null;
    
    public function add(model\Order $order) {
        return parent::post('AddOrder', array(
            'order' => $order
        ));
    }

    public function order($orderId) {
        return parent::get('GetOrderInfo', array(
            'orderId' => $orderId
        ));
    }

    public function shipments($startDate, $endDate) {
        return parent::get('GetShippingActivity', array(
            'StartDate' =>  $startDate,
            'EndDate' => $endDate
        ));
    }

    protected function getClient() {
      if(self::$client === null) {
        $mode = array (
            'soap_version' => 'SOAP_1_2',
            'trace' => 1
        );

        self::$client = new \SoapClient('https://'.$this->configuration->getDomain().$this->getWSDL(), $mode);

        self::$client->__setLocation('https://'.$this->configuration->getDomain().$this->getEndpoint());

        $this->getHeader(self::$client);
      }

      return self::$client;
    }
    
    protected function getWSDL() {
        return '/pmomsws/oms.asmx?wsdl';
    }

    protected function getEndpoint() {
        return '/pmomsws/oms.asmx?wsdl';
    }

    protected function getHeader($client) {
        $header = new \SoapHeader('http://omscom/', 'AuthenticationHeader', array(
            'Username' => $this->configuration->getUsername(),
            'Password' => $this->configuration->getPassword()
        ));

        $client->__setSoapHeaders($header);
    }
}