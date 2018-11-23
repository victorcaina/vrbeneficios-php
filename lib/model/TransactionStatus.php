<?php

namespace VrBeneficios\model;

/**
 * Status of transaction
 */
abstract class TransactionStatus
{
    const TRANSACAO_REALIZADA                                     = 00;
    const ESTABELECIMENTO_NAO_CADASTRADO                          = 01;
    const CARTAO_EXPIRADO                                         = 03;
    const CARTAO_BLOQUEADO                                        = 04;
    const ESTABELECIMENTO_INATIVO_PARA_PRODUTO                    = 10;
    const SENHA_BLOQUEADA                                         = 11;
    const SALDO_INSUFICIENTE                                      = 16;
    const DUPLICIDADE_TRANSACAO                                   = 17;
    const TRANSACAO_NAO_ENCONTRADA                                = 19;
    const VALOR_MAX_ACIMA_LIMITE                                  = 60;
    const APLICACAO_NAO_HABILITADA_PARA_A_REDE_DE_CAPTURA         = 63;
    const CARTAO_LOCK_TIMEOUT                                     = 65;
    const CONTA_LOCK_TIMEOUT                                      = 66;
    const VALOR_ABAIXO_MINIMO_PERMITIDO                           = 67;
    const TRANSACAO_NAO_AUTORIZADA                                = 76;
    const CVV2_INVALIDO                                           = 95;
    const DAT_VAL_DIGITADA_INVALIDA                               = 97;
    const NAO_DEFINIDO                                            = 99;
    const TRANSACAO_NAO_PERMITIDA_REGRA_ACEITACAO_REDE_FECHADA    = C2;
    const TRANSACAO_NAO_PERMITIDA_REGRA_NEGACAO_REDE_FECHADA      = C3;
    const AUTORIZACAO_LOCK_TIMEOUT                                = C4;
    const TRANSACAO_COM_VALOR_ACIMA_DO_PERMITIDO_DIARIO_PARA_O_RH = D0;
    const SUBPRODUTO_NAO_PERMITIDO_NO_EC                          = D1;
}