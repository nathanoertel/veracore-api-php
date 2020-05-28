<?php
namespace VeraCoreAPI;

class Configuration implements \JsonSerializable {
    private $configuration;

    public function getDomain() {
        return $this->configuration['domain'];
    }

    public function getUsername() {
        return $this->configuration['username'];
    }

    public function getPassword() {
        return $this->configuration['password'];
    }

    public function getSystemId() {
        return $this->configuration['system-id'];
    }

    public function getToken() {
        return $this->configuration['token']['token'];
    }

    public function setToken($token, $expires) {
        $this->configuration['token'] = array(
            'token' => $token,
            'expires' => strtotime($expires)
        );
    }

    public function isAuthenticated() {
        return isset($this->configuration['token']['expires']) && time() + 60 * 10 < $this->configuration['token']['expires'];
    }

    public function jsonSerialize() {
        return $this->configuration;
    }

    public function __construct($config) {
        if(!isset($config['domain'])) throw new VeraCoreAPI\ConfigurationException('Domain required');
        if(!isset($config['username'])) throw new VeraCoreAPI\ConfigurationException('Username required');
        if(!isset($config['password'])) throw new VeraCoreAPI\ConfigurationException('Password required');
        if(!isset($config['system-id'])) throw new VeraCoreAPI\ConfigurationException('System ID required');
        $this->configuration = $config;
    }
}