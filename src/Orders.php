<?php
namespace VeraCoreAPI;

class Orders extends AbstractSOAPRequest {
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