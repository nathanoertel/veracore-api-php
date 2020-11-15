<?php
namespace VeraCoreAPI;

class Shipping extends AbstractSOAPRequest {
    private static $client = null;
  
    public function packages($startDate, $endDate = null) {
        return parent::get('GetShippingInformation', array(
            'startDate' => date('Y-m-d\TH:i:sP', $startDate),
            // 'endDate' => date('Y-m-d\Th:i:s', $endDate),
            'includeDetails' => true
        ));
    }
   
    public function package($packageId) {
        return parent::get('GetShippingInfoByPackageId', array(
            'packageId' => $packageId,
            'includeDetails' => true
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
        return '/PMWarehouse/services/ShippingSync.asmx?wsdl';
    }

    protected function getEndpoint() {
        return '/PMWarehouse/services/ShippingSync.asmx';
    }

    protected function getHeader($client) {
        $header = new \SoapHeader('http://sma-promail/', 'AuthenticationHeader', array(
            'Username' => $this->configuration->getUsername(),
            'Password' => $this->configuration->getPassword()
        ));

        $client->__setSoapHeaders($header);
    }
}