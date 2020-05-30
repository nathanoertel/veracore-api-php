<?php
namespace VeraCoreAPI\model;

class OrderHeader extends AbstractModel {
    protected function __fields() {
        return array(
            'ID' => new FieldType('string'),
            'EntryDate' => new FieldType('dateTime'),
            'OrderEntryView' => new FieldType('OrderEntryView'),
            'ReferenceNumber' => new FieldType('string'),
            'PONumber' => new FieldType('string'),
            'Comments' => new FieldType('string'),
            'IpAddress' => new FieldType('string'),
            'ApprovalComment' => new FieldType('string'),
            'InsertDate' => new FieldType('dateTime'),
            'UTCEntryDateTime' => new FieldType('dateTime')
        );
    }
}