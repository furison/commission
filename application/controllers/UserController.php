<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author alex.antrobus
 */
class UserController
{
    //constructor
    

    public function checkPass($sPass, $oUser, $returnHash = false)
	{
		//setup hash algo
		$hashalgo = sha1;
		$sSalt1 = "jc4992nd0,ml.i49*0=";
		$sSalt2 = 'n9oi6n0/,.mfa90-2ncdu';

		//generate hash
		$sHash = password_hash( $sPass.$sSalt1, $hashalgo, array('salt'=> $sSalt2));

		$bValid = password_verify( $sHash, $oUser->getPassHash); 
        }

}
