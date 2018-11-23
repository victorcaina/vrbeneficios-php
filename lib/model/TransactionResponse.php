<?php

namespace VrBeneficios\model;

use VrBeneficios\model\BaseResponse;

/**
* Class TransactionResponse
*
* This class is filled with transaction information.
* Response object from the server.
*/
class TransactionResponse extends BaseResponse
{
    public $id_transacao;
    public $valor;
    public $codigo_retorno;
    public $codigo_autorizacao;
    public $mensagem;

    /**
     * @return string
     */
    public function getIdTransacao()
    {
        return $this->id_transacao;
    }

    /**
     * @param string $id_transacao
     */
    public function setIdTransacao($id_transacao)
    {
        $this->id_transacao = $id_transacao;
    }

    /**
     * @return integer
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param integer $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return string
     */
    public function getCodigoAutorizacao()
    {
        return $this->codigo_autorizacao;
    }

    /**
     * @param string $codigo_autorizacao
     */
    public function setCodigoAutorizacao($codigo_autorizacao)
    {
        $this->codigo_autorizacao = $codigo_autorizacao;
    }

    /**
     * @return string
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }

    /**
     * @param string $mensagem
     */
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;
    }

    /**
     * @param string $json
     * @return TransactionResponse
     */
    public static function mapFromJson($json)
    {
        $response = json_decode($json, true);

        if (empty($response)) {
            return null;
        }

        $transactionResponse = new TransactionResponse();
        if (array_key_exists('id_transacao', $response))
            $transactionResponse->setIdTransacao($response['id_transacao']);
        if (array_key_exists('valor', $response))
            $transactionResponse->setValor($response['valor']);
        if (array_key_exists('codigo_retorno', $response))
            $transactionResponse->setCodigoAutorizacao($response['codigo_retorno']);
        if (array_key_exists('codigo_autorizacao', $response))
            $transactionResponse->setCodigoAutorizacao($response['codigo_autorizacao']);
        if (array_key_exists('mensagem', $response))
        	$transactionResponse->setMensagem($response['mensagem']);

        return $transactionResponse;
    }
}