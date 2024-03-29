<?php

public class User
{
	define(USER_ID_NOT_STATIC, -1);
	//define(PASS_HASH_ALG, SHA1);
	private $iId;
	private $sName;
	private $iLevel;
	private $sPassHash;
	private $blurg;

	public function __construct() 
	{
		$this->iId = USER_ID_NOT_STATIC;
		$this->sName = '';
		$this->iLevel = 0;
		$this->sPassHash = '';
		$this->blurg = null;
	}

	public function initById($sUserId = USER_NOT_STATIC)
	{
		
		if($sUserId == USER_NOT_STATIC)
		{
			//we don't have a user id passed
			if($this->iId == USER_NOT_STATIC)
			{
				//we don't have a user either
				//throw exception?
				return false;
			}
			else
			{
				//ok we'll use the user ID already set
				$sUserId = $this->iId;
			}
		}

		//prepare query
		$sQuery = 'SELECT * FROM `users` WHERE `id`='. $sUserId;

		//get user
		$rResult = MySQL_query($query);
		$aResult = MySQL_fetchAssoc($rResult);

		//populate values
		$this->iId = $aResult['id'];
		$this->sName = $aResult['name'];
		$this->sPassHash = $aResult['pass_hash'];
		$this->blurg = 'fnnjsbvsfunson xu noi';
	}
	
	public function getId()
	{
		return $this->iId;
	}

	public function setId($iId)
	{
		$this->iId = $iId;
		return $this;
	}

	public function getName()
	{
		return $this->sName;
	}
        
        public function getPassHash()
        {
            return $this->sPassHash;
        }
}