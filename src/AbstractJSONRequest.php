<?php
namespace VeraCoreAPI;

abstract class AbstractJSONRequest {
    const GET = 'GET';
    const POST = 'POST';
    const PUT = 'PUT';
    const DELETE = 'DELETE';

    /**
     * The configuration object
     * @var VeraCoreAPI\Configuration $configuration
     */
    private $configuration;

    /**
     * The PSR-3 compatible logging interface
     * @var mixed $logger
     */
    private $logger;

    public function get($path, $params = array()) {
        return $this->request($path, AbstractJSONRequest::GET, $params);
    }

    public function post($path, $data = array()) {
        return $this->request($path, AbstractJSONRequest::POST, $data);
    }

    private function request($path, $method, $data) {
		$curl = curl_init();

		$options = array(
		    CURLOPT_RETURNTRANSFER => 1,
		    CURLOPT_URL => 'https://'.$this->configuration->getDomain().'/veracore/public.api/api/'.$path,
		    CURLOPT_HTTPHEADER => array(
		    	'Accept: application/json',
                'Authorization: bearer '.$this->getAuthorization($path),
                'Content-Type: application/json'
		    ),
		    CURLOPT_HEADER => 1,
		    CURLOPT_RETURNTRANSFER => 1
        );
        
		if($method == AbstractJSONRequest::GET) {
			if(!empty($data)) $options[CURLOPT_URL] .= '?'.http_build_query($data);
			$this->log('GET '.$options[CURLOPT_URL]);
		} else if($method == AbstractJSONRequest::PUT) {
			$options[CURLOPT_CUSTOMREQUEST] = 'PUT';
		    $options[CURLOPT_POSTFIELDS] = json_encode($data);
            $this->log('UPDATE '.$options[CURLOPT_URL]);
            $this->log($options[CURLOPT_POSTFIELDS]);
		} else if($method == AbstractJSONRequest::POST) {
			$options[CURLOPT_POST] = 1;
		    $options[CURLOPT_POSTFIELDS] = json_encode($data);
            $this->log('POST '.$options[CURLOPT_URL]);
            $this->log($options[CURLOPT_POSTFIELDS]);
		} else if($method == AbstractJSONRequest::DELETE) {
			$options[CURLOPT_CUSTOMREQUEST] = 'DELETE';
			$this->log('DELETE '.$options[CURLOPT_URL]);
		}
		
		curl_setopt_array($curl, $options);

        $response = curl_exec($curl);

		if($response !== false) {
			if($this->logger) $this->log($response);
			
			$headerSize = curl_getinfo($curl, CURLINFO_HEADER_SIZE);

			$headers = substr($response, 0, $headerSize);
			$body = substr($response, $headerSize);
			
			$headerArray = explode("\r\n", $headers);
            $httpCode = 500;
            
            foreach($headerArray as $index => $header) {
                if(strpos($header, 'HTTP/2') === 0) {
                    $httpCode = intval(str_replace('HTTP/2', '', $header));
                    break;
                }
            }
            
            $response = json_decode($body, true);
    
            if(isset($response['Error'])) {
                throw new VeraCoreAPI\exception\RequestException($response['Error']);
            } else if($httpCode != 200) {
                throw new VeraCoreAPI\exception\RequestException('Unknown Error: '.$httpCode);
			} else {
                return $response;
            }
		} else {
            if($this->logger) $this->log(curl_error($curl));
            throw new VeraCoreAPI\exception\RequestException('Unknown Error: '.curl_errno($curl));
		}
		
		curl_close($curl);
    }

    private function getAuthorization($path) {
        if($path == 'login') return '';

        if(!$this->configuration->isAuthenticated()) {
            try {
                $response = $this->request('login', AbstractJSONRequest::POST, array(
                    'userName' => $this->configuration->getUsername(),
                    'password' => $this->configuration->getPassword(),
                    'systemId' => $this->configuration->getSystemId()
                ));

                $this->configuration->setToken($response['Token'], $response['UtcExpirationDate']);
            } catch(VeraCoreAPI\exception\RequestException $e) {
                throw new VeraCoreAPI\exception\AuthenticationException($e->getMessage());
            }
        }

        return $this->configuration->getToken();
    }

    public function __construct(Configuration $config, $logger = null) {
        $this->configuration = $config;
        $this->logger = $logger;
    }

    private function log($message) {
        if($this->logger) $this->logger->info($message);
    }
}