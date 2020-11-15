<?php
namespace VeraCoreAPI;

class OrderCancel extends AbstractSOAPRequest {
    private static $client = null;
  
    public function cancel($orderId) {
        return parent::get('CancelOrder', array(
            'OrderData' => array(
                'AuthenticationHeader' => array(
                    'Username' => $this->configuration->getUsername(),
                    'Password' => $this->configuration->getPassword()
                ),
                'CancelOrderWSObject' => array(
                    'OrderID' => $orderId
                )
            )
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
        return '/pmomsws/orderadjustment.svc?wsdl';
    }

    protected function getEndpoint() {
        return '/pmomsws/orderadjustment.svc/soap';
    }
    
    protected function getHeader($client) {

    }
}