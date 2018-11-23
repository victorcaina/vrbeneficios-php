<?php

namespace VrBeneficios;

use VrBeneficios\common\Request;
use VrBeneficios\model\Security;
use VrBeneficios\model\TransactionRequest;
use VrBeneficios\model\TransactionResponse;
use VrBeneficios\model\ReturnCode;

/**
* Class Acquirer
*
* This class encapsulates the api call
*/
class Acquirer
{
    private $security = null;

    function __construct($client_id, $client_secret, $environment)
    {
        $this->security = new Security($client_id, $client_secret, $environment);
    }

    /**
     * @param TransactionRequest $transactionRequest
     * @return TransactionResponse
     */
    function authorize(TransactionRequest $transactionRequest)
    {
        $url_path = 'transacoes/pagamentos';

        try{
            $request = new Request($this->security);
            $response = $request->post($url_path, $transactionRequest->toJson());

            if ($response == null) {
	        	throw new Exception();
	        }
        }
        catch (\Exception $e) {
            $response = new TransactionResponse();
            $response->setReturnCode(ReturnCode::UNSUCCESSFUL);
            $response->setReturnMessage($e->getMessage());

            return $response;
        }

        $transactionResponse = TransactionResponse::mapFromJson($response);

        return $transactionResponse;
    }
}