<?php

namespace VrBeneficios\model;

use VrBeneficios\common\BaseModel;

/**
* Class BaseResponse
*/
class BaseResponse extends BaseModel
{
    private $returnCode;
    private $returnMessage;

	/**
	 * @return string
	 */
	public function getReturnCode(){
		return $this->returnCode;
	}

	/**
	 * @param string $returnCode
	 */
	public function setReturnCode($returnCode){
		$this->returnCode = $returnCode;
    }

	/**
	 * @return string
	 */
	public function getReturnMessage(){
		return $this->returnMessage;
	}

	/**
	 * @param string $returnMessage
	 */
	public function setReturnMessage($returnMessage){
		$this->returnMessage = $returnMessage;
	}
}