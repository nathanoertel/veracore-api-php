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

        $client = new \SoapClient('https://'.$this->configuration->getDomain().$this->getWSDL(), $mode);

        $client->__setLocation('https://'.$this->configuration->getDomain().$this->getEndpoint());

        $this->getHeader($client);

        try {
            $resp = $client->__soapCall($operation, array($data));
            $this->log($client->__getLastRequest());
            $this->log($client->__getLastResponse());

            return $resp;
        } catch(\SoapException $e) {
            $this->log($client->__getLastRequest());
            $this->log($client->__getLastResponse());
            throw $e;
        } catch(\Exception $e) {
            $this->log($client->__getLastRequest());
            $this->log($client->__getLastResponse());
            throw $e;
        }
    }

    protected abstract function getWSDL();

    protected abstract function getEndpoint();

    protected abstract function getHeader($client);

    public function __construct(Configuration $config, $logger = null) {
        $this->configuration = $config;
        $this->logger = $logger;
    }

    private function log($message) {
        if($this->logger) $this->logger->info($message);
    }
}