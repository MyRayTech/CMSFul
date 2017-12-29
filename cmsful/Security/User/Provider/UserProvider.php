<?php

/*
	* The MIT License
	*
	* Copyright 2017 Reaper.
	*
	* Permission is hereby granted, free of charge, to any person obtaining a copy
	* of this software and associated documentation files (the "Software"), to deal
	* in the Software without restriction, including without limitation the rights
	* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	* copies of the Software, and to permit persons to whom the Software is
	* furnished to do so, subject to the following conditions:
	*
	* The above copyright notice and this permission notice shall be included in
	* all copies or substantial portions of the Software.
	*
	* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
	* THE SOFTWARE.
	*/

namespace	CMS\Security\User\Provider;

use Symfony\Component\Security\Core\User\EquatableInterface;
use CMS\Model\UserInterface;

/**
	* Description of UserProvider
	*
	* @author Reaper
	*/
class	UserProvider	 implements UserInterface, EquatableInterface 
{
				protected $username;
				protected $password;
				protected $roles;
				protected $salt;
				
				//put your code here
				public	function	eraseCredentials()	{
								
				}

				public	function	getPassword():	string	{
								
				}

				public	function	getRoles()	{
								
				}

				public	function	getSalt()	{
								
				}

				public	function	getUsername():	string	{
								
				}

				public	function	isAccountNonExpired():	bool	{
								
				}

				public	function	isAccountNonLocked():	bool	{
								
				}

				public	function	isCredentialsNonExpired():	bool	{
								
				}

				public	function	isEnabled():	bool	{
								
				}

				public	function	isEqualTo(\Symfony\Component\Security\Core\User\UserInterface	$user):	bool	{
								if (!$user instanceof UserProvider) {
            return false;
        }

        if ($this->password !== $user->getPassword()) {
            return false;
        }

        if ($this->salt !== $user->getSalt()) {
            return false;
        }

        if ($this->username !== $user->getUsername()) {
            return false;
        }

        return true;
				}

}
