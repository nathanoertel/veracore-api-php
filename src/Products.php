<?php
namespace VeraCoreAPI;

class Products extends AbstractSOAPRequest {
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