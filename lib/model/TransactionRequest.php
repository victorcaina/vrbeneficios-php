<?php

namespace VrBeneficios\model;

use VrBeneficios\common\BaseModel;

/**
 * Class TransactionRequest
 *
 * This class is filled with transaction information.
 * Request object sent to the server.
 */
class TransactionRequest extends BaseModel
{
	private $valor;
	private $id_filiacao;

	// Card
	private $cartao_voucher;

    /**
     * @return string
     */
	public function getValor()
	{
		return $this->valor;
	}

    /**
     * @param string $valor
     */
	public function setValor($valor)
	{
		$this->valor = $valor;
	}

    /**
     * @return string
     */
	public function getIdFiliacao()
	{
		return $this->id_filiacao;
	}

    /**
     * @param string $id_filiacao
     */
	public function setIdFiliacao($id_filiacao)
	{
		$this->id_filiacao = $id_filiacao;
	}

    /**
     * @return CartaoVoucher
     */
	public function getCartaoVoucher()
	{
		return $this->cartao_voucher;
	}

    /**
     * @param CartaoVoucherRequest $cartaoVoucher
     */
	public function setCartaoVoucher(CartaoVoucherRequest $cartaoVoucher)
	{
		$this->cartao_voucher = $cartaoVoucher;
	}
}