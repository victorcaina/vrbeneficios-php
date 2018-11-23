<?php

namespace VrBeneficios\common;

/**
 * Class OAuthTokenCredential
 */
class OAuthTokenCredential
{
    /**
    * Client Id number.
    *
    * @var string
    */
    private $client_id = null;

    /**
    * Client Secret number.
    *
    * @var string
    */
    private $client_secret = null;

	/**
	 * Base url from api
	 *
	 * @var string
	 */
    private $baseUrl = 'https://api.vr.com.br/oauth/';

    /**
	 * Default Curl Options
	 *
	 * @var array
	 */
	private $defaultCurlOptions = [
        CURLOPT_RETURNTRANSFER  => true,
        CURLOPT_ENCODING        => "",
        CURLOPT_MAXREDIRS       => 10,
        CURLOPT_TIMEOUT         => 30,
        CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST   => "POST",
		CURLOPT_HTTPHEADER      => ["cache-control: no-cache", "content-type: application/json"]
	];

	/**
	 * Constructor
	 */
	function __construct($client_id, $client_secret)
	{
        $this->client_id = $client_id;
        $this->client_secret = $client_secret;
    }

    /**
     * Generates a new grant code
     */
    function getGrantCode()
    {
        $url_path = 'grant-code';
        $json = [
            'client_id'     => $this->client_id,
            'redirect_uri'  => 'http://localhost/'
        ];

        $code = $this->getToken($url_path, json_encode($json));
        $code = explode('?', json_decode($code, true)['redirect_uri']);
        $code = explode('=', $code[1]);

        return $code[1];
    }

    /**
     * Generates a new access token
     */
    function generateAccessToken()
    {
        $code = $this->getGrantCode();

        $this->defaultCurlOptions[CURLOPT_HTTPHEADER][] = 'Authorization: Basic ' . base64_encode($this->client_id . ':' . $this->client_secret);

        $url_path = 'access-token';
        $json = [
            'grant_type'    => 'authorization_code',
            'code'          => $code
        ];

        $token = $this->getToken($url_path, json_encode($json));

        return json_decode($token, true);
    }

    /**
     * Retrieves the token based on the input configuration
     *
     * @param string $url_path
     * @param string (json formatted) $json
     */
    protected function getToken($url_path, $json = null)
    {
        $curl = curl_init($this->getFullUrl($url_path));

        curl_setopt_array($curl, $this->defaultCurlOptions);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $json);

        $response = curl_exec($curl);

        if(!$response){
        	throw new \Exception(curl_error($curl));
        }

        curl_close($curl);

        return $response;
    }

    /**
     * Get request full url
     *
     * @param string $url_path
     * @return string $url(config) + $url_path
     */
    private function getFullUrl($url_path)
    {
        if (stripos($url_path, $this->baseUrl, 0) === 0) {
            return $url_path;
        }

        return $this->baseUrl . $url_path;
    }
}