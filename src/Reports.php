<?php
namespace VeraCoreAPI;

class Reports extends AbstractJSONRequest {
    public function list() {
        return parent::get('reports');
    }

    public function details($name) {
        return parent::get('reportdetail', array('reportName' => $name));
    }

    public function request($name, $filters) {
        return parent::post('reports', array(
            'reportName' => $name,
            'filterCriteria' => $filters
        ));
    }

    public function status($taskId) {
        return parent::get('reports/'.$taskId.'/status');
    }

    public function report($taskId) {
        return parent::get('reports/'.$taskId);
    }
}