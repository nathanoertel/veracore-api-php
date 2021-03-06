<?php
namespace VeraCoreAPI;

class Products extends AbstractSOAPRequest {
    private static $client = null;
  
    public function get($productId, $ownerId = '') {
        return parent::get('GetProduct', array(
            'OwnerID' => $ownerId,
            'ProductID' => $productId
        ));
    }

    public function offers($search) {
        return parent::get('GetOffers', array(
            'sortGroups' => '',
            'categoryGroupDescription' => '',
            'mailerUID' => '',
            'searchString' => $search,
            'searchID' => true,
            'searchDescription' => false,
            'priceClassDescription' => ''
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