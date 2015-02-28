<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
//		$users=array(
//			// username => password
//			'demo'=>'demo',
//			'admin'=>'admin',
//		);

        // 在这个地方校验用户名和密码的真实性
        // 首先来看看是否有此用户名存在
        // find() 如果没有查询出来数据，会返回null
        // findAll() 空数据会返回空数组
        // 根据用户名查询数据库中是否有这条数据
        $user_model = User::model()->find('username=:name',array(':name'=>$this->username));

        if($user_model === null){ // 如果用户名不存在
            $this->errorCode=self::ERROR_USERNAME_INVALID;
            return false;
        }elseif($user_model->password !== md5($this->password)){ // 做密码判断，加密处理
            /*
             * $user_model -> password 表示的是数据库中存储的密码数据，从数据库中取出来的
             * $this       -> password 表示的是前台用户输入的密码数据
             */
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
            return false;
        }else{
            $this->errorCode=self::ERROR_NONE;
            return true;
        }

//		if(!isset($users[$this->username]))
//			$this->errorCode=self::ERROR_USERNAME_INVALID;
//		elseif($users[$this->username]!==$this->password)
//			$this->errorCode=self::ERROR_PASSWORD_INVALID;
//		else
//			$this->errorCode=self::ERROR_NONE;
//		return !$this->errorCode;
	}
}