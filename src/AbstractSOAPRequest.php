<?php
namespace VeraCoreAPI;

abstract class AbstractSOAPRequest {
    const GET = 'GET';
    const POST = 'POST';
    const PUT = 'PUT';
    const DELETE = 'DELETE';

    /**
     * The configuration object
     * @var VeraCoreAPI\Configuration $configuration
     */
    protected $configuration;

    /**
     * The PSR-3 compatible logging interface
     * @var mixed $logger
     */
    private $logger;

    public function get($operation, $params = array()) {
        return $this->request($operation, AbstractJSONRequest::GET, $params);
    }

    public function post($operation, $data = array()) {
        return $this->request($operation, AbstractJSONRequest::POST, $data);
    }

    private function request($operation, $method, $data) {
        $mode = array (
            'soap_version' => 'SOAP_1_2',
            'trace' => 1
        );

        $client = new \SoapClient('https://'.$this->configuration->getDomain().'/pmomsws/oms.asmx?wsdl', $mode);

        // $client->__setLocation($this->endpoint);

        $header = new \SoapHeader('http://omscom/', 'AuthenticationHeader', array(
            'Username' => $this->configuration->getUsername(),
            'Password' => $this->configuration->getPassword()
        ));

        $client->__setSoapHeaders($header);

        try {
            error_log(var_export($data, true));
            $resp = $client->__soapCall($operation, array($data));
            $this->log($client->__getLastRequest());
            $this->log($client->__getLastResponse());

            return $resp;
        } catch(\SoapException $e) {
            error_log('SOAPException');
            $this->log($client->__getLastRequest());
            $this->log($client->__getLastResponse());
            throw $e;
        } catch(\Exception $e) {
            error_log('Exception');
            $this->log($client->__getLastRequest());
            $this->log($client->__getLastResponse());
            throw $e;
        }

        // if($resp->Response->ResponseStatus->Code == 1) {

        // } else {
        //     throw new exception\RequestException('Request Failed');
        // }
    }

    public function __construct(Configuration $config, $logger = null) {
        $this->configuration = $config;
        $this->logger = $logger;
    }

    private function log($message) {
        if($this->logger) $this->logger->info($message);
    }
}