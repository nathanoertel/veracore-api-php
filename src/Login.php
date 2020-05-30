<?php
namespace VeraCoreAPI;

class Login extends AbstractJSONRequest {
    public function login() {
        parent::post('login', array(
            'userName' => $this->configuration->getUsername(),
            'password' => $this->configuration->getPassword(),
            'systemId' => $this->configuration->getSystemId()
        ));

        return true;
    }
}