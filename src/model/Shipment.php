<?php
namespace VeraCoreAPI\model;

class Shipment {
    public $address = array();
    public $lines = array();

    public function addLine($productId, $quantity, $unitPrice, $discount = null, $tax = null) {
        $this->lines[] = array(
            'Offer' => array(
                'Header' => array(
                    'ID' => $productId
                )
            ),
            'Quantity' => $quantity,
            'UnitPrice' => $unitPrice,
            'Discounts' => $discount,
            'LineTaxAmount' => $tax
        );
    }

    public function __construct($firstName, $lastName, $companyName, $address1, $address2, $city, $state, $postcode, $country, $email, $phone) {
        $this->address = array(
            'FirstName' => $firstName,
            'LastName' => $lastName,
            'CompanyName' => $companyName,
            'Address1' => $address1,
            'Address2' => $address2,
            'City' => $city,
            'State' => $state,
            'PostalCode' => $postcode,
            'Country' => $country,
            'Email' => $email,
            'Phone' => $phone
        );
    }
}