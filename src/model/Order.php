<?php
namespace VeraCoreAPI\model;

class Order extends AbstractModel {
    protected function __fields() {
        return array(
            'Header' => new FieldType('OrderHeader'),
            'Classification' => new FieldType('OrderClassification'),
            'Shipping' => new FieldType('OrderShipping'),
            'Money' => new FieldType('OrderMoney'),
            'Payment' => new FieldType('OrderPayment'),
            'OrderVariables' => new FieldType('ArrayOfOrderVariable'),
            'OrderedBy' => new FieldType('OrderedBy'),
            'ShipTo' => new FieldType('ArrayOfOrderShipTo'),
            'BillTo' => new FieldType('OrderBillTo'),
            'Offers' => new FieldType('ArrayOfOfferOrdered'),
            'OrderRecurrenceSchedule' => new FieldType('OrderRecurrenceSchedule'),
            'OrderBudget' => new FieldType('OrderBudget'),
        );
    }
    // public function setBillTo($firstName, $lastName, $companyName, $address1, $address2, $city, $state, $postcode, $country, $email = null, $phone = null) {
    //     $this->_data['OrderedBy'] = array(
    //         'FirstName' => $firstName,
    //         'LastName' => $lastName,
    //         'CompanyName' => $companyName,
    //         'Address1' => $address1,
    //         'Address2' => $address2,
    //         'City' => $city,
    //         'State' => $state,
    //         'PostalCode' => $postcode,
    //         'Country' => $country,
    //         'Phone' => $phone,
    //         'Email' => $email
    //     );
    //     $this->_data['BillTo'] = array(
    //         'Flag' => 'OrderedBy'
    //     );
    // }

    // public function addShipment(Shipment $shipment) {
    //     if(!isset($this->_data['OrderedBy'])) {
    //         $this->setBillTo(
    //             $shipment->address['FirstName'],
    //             $shipment->address['LastName'],
    //             $shipment->address['CompanyName'],
    //             $shipment->address['Address1'],
    //             $shipment->address['Address2'],
    //             $shipment->address['City'],
    //             $shipment->address['State'],
    //             $shipment->address['PostalCode'],
    //             $shipment->address['Country'],
    //             $shipment->address['Email'],
    //             $shipment->address['Phone']
    //         );
    //     }

    //     $key = count($this->_data['ShipTo']['OrderShipTo']) + 1;

    //     $shipTo = $shipment->address;
    //     $shipTo['Key'] = $key;
    //     $shipTo['Flag'] = 'Other';
    //     $this->_data['ShipTo']['OrderShipTo'][] = $shipTo;

    //     foreach($shipment->lines as $line) {
    //         $line['OrderShipTo'] = array(
    //             'Key' => $key
    //         );
    //         $this->_data['Offers'][] = $line;
    //     }
    // }

    // public function __construct($orderNumber, $referenceOrderNumber, $date) {
    //     $this->_data['Header'] = array(
    //         'PONumber' => $orderNumber,
    //         'ReferenceNumber' => $referenceOrderNumber,
    //         'EntryDate' => date(DATE_ATOM, $date)
    //     );
    //     $this->_data['Offers'] = array();
    //     $this->_data['ShipTo'] = array(
    //         'OrderShipTo' => array()
    //     );
    // }
}