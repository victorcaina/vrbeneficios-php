<?php

namespace VrBeneficios\model;

/**
* Class Security
*
* This class is responsable for store affiliation's information.
*/
class Security
{
    /**
    * Client Id number.
    *
    * @var string
    */
    public $client_id = null;

    /**
    * Client Secret number.
    *
    * @var string
    */
    public $client_secret = null;

    /**
    * The environment which will conect.
    *
    * @var EnvironmentType
    */
    public $environment = null;

    function __construct($client_id, $client_secret, $environment)
    {
        $this->client_id     = $client_id;
        $this->client_secret = $client_secret;
        $this->environment   = $environment;
    }
}