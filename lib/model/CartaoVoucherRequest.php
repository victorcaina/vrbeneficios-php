<?php

namespace VrBeneficios\model;

use VrBeneficios\common\BaseModel;

/**
 * Class CartaoVoucherRequest
 *
 * This class is filled with card information.
 * Request object sent to the server.
 */
class CartaoVoucherRequest extends BaseModel
{
    private $nome;
    private $numero_cartao;
    private $data_expiracao;
    private $cvv;
    private $documento;

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getNumeroCartao()
    {
        return $this->numero_cartao;
    }

    /**
     * @param string $numero_cartao
     */
    public function setNumeroCartao($numero_cartao)
    {
        $this->numero_cartao = $numero_cartao;
    }

    /**
     * @return string
     */
    public function getDataExpiracao()
    {
        return $this->data_expiracao;
    }

    /**
     * @param string $data_expiracao
     */
    public function setDataExpiracao($data_expiracao)
    {
        $this->data_expiracao = $data_expiracao;
    }

    /**
     * @return string
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * @param string $cvv
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
    }

    /**
     * @return string
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * @param string $documento
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;
    }
}