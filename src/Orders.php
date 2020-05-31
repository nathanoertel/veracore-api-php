<?php
namespace VeraCoreAPI;

class Orders extends AbstractSOAPRequest {
    public function add(model\Order $order) {
        return parent::post('AddOrder', array(
            'order' => $order
        ));
    }
}