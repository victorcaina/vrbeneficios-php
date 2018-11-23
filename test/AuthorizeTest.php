<?php

require("../vendor/autoload.php");

// Vr
use VrBeneficios\Acquirer;
use VrBeneficios\model\EnvironmentType;
use VrBeneficios\model\TransactionRequest as transaction;
use VrBeneficios\model\CartaoVoucherRequest as card;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$transaction = new transaction();
$acquirer = new Acquirer('client_id', 'client_secrect', EnvironmentType::HOMOLOG);

$card = new card();
$card->setNome('Nome test');
$card->setNumeroCartao('4111111111111111');
$card->setDataExpiracao('1023');
$card->setCvv('123');
$card->setDocumento('397295145');

$transaction->setValor('101');
$transaction->setIdFiliacao('145271514262728');
$transaction->setCartaoVoucher($card);

var_dump($acquirer->authorize($transaction));