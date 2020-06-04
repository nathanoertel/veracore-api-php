<?php
namespace VeraCoreAPI;

class OrderCancel extends AbstractSOAPRequest {
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
    
    protected function getWSDL() {
        return '/pmomsws/orderadjustment.svc?wsdl';
    }

    protected function getEndpoint() {
        return '/pmomsws/orderadjustment.svc/soap';
    }
    
    protected function getHeader($client) {

    }
}