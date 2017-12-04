<?php

/**
	* RayTech Content Management System
	* @author Kevin Roy <royk@myraytech.net>
	* @link <https://myraytech.net>
	* @copyright (c) 2017, RayTech Hosting
	* @license MIT
	*/

namespace	CMS\Entity;

use	Doctrine\ORM\Mapping	as	ORM;
use	CMS\Model\UserInterface;

/**
	* @ORM\Entity(repositoryClass="CMS\Entity\UserRepository")
	* @ORM\Table(name="cmsf_users")
	*/
class	User	implements	UserInterface,	\Serializable	{

				/**
					* @ORM\Column(type="integer")
					* @ORM\Id
					* @ORM\GeneratedValue(strategy="AUTO")
					*/
				protected	$id;

				/**
					* @ORM\Column(type="string", length=100, nullable=true)
					*/
				protected	$first_name;

				/**
					* @ORM\Column(type="string", length=100, nullable=true)
					*/
				protected	$last_name;

				/**
					* @ORM\Column(type="string", length=10, nullable=true)
					*/
				protected	$locale;

				/**
					* @ORM\Column(type="string", length=60, nullable=true)
					*/
				protected	$avatar;

				/**
					* @ORM\ManyToMany(targetEntity="Role")
					* @ORM\JoinTable(name="cmsf_user_roles",
					*      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
					*      inverseJoinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id")})
					*/
				protected	$roles;

				/**
					* @ORM\Column(type="string")
					*/
				protected	$username;

				/**
					* @ORM\Column(type="string")
					*/
				protected	$usernameCanonical;

				/**
					* @ORM\Column(type="string")
					*/
				protected	$email;

				/**
					* @ORM\Column(type="string")
					*/
				protected	$emailCanonical;

				/**
					* @ORM\Column(type="boolean")
					*/
				protected	$enabled;

				/**
					* The salt to use for hashing.
					*
					* @ORM\Column(type="string")
					*/
				protected	$salt;

				/**
					* Encrypted password. Must be persisted.
					*
					* @ORM\Column(type="string")
					*/
				protected	$password;

				/**
					* Plain password. Used for model validation. Must not be persisted.
					*
					* @ORM\Column(type="string")
					*/
				protected	$plainPassword;

				/**
					* @ORM\Column(type="datetime")
					*/
				protected	$lastLogin;

				/**
					* Random string sent to the user email address in order to verify it.
					*
					* @ORM\Column(type="string")
					*/
				protected	$confirmationToken;

				/**
					* @ORM\Column(type="datetime")
					*/
				protected	$passwordRequestedAt;

			

				/**
					* Set lastName
					*
					* @param string $lastName
					* @return User
					*/
				public	function	setLastName($lastName)	{
								$this->last_name	=	$lastName;

								return	$this;
				}

				/**
					* Get lastName
					*
					* @return string 
					*/
				public	function	getLastName()	{
								return	$this->last_name;
				}

				/**
					* Set first_name
					*
					* @param string $firstName
					* @return User
					*/
				public	function	setFirstName($firstName)	{
								$this->first_name	=	$firstName;

								return	$this;
				}

				/**
					* Get first_name
					*
					* @return string 
					*/
				public	function	getFirstName()	{
								return	$this->first_name;
				}

				/**
					* Set Salt
					* 
					* @param string $salt
					* @return \CMS\Entity\User
					*/
				public	function	setSalt($salt)	{
								$this->salt	=	$salt;
								return	$this;
				}

				/**
					* Set locale
					*
					* @param string $locale
					* @return User
					*/
				public	function	setLocale($locale)	{
								$this->locale	=	$locale;

								return	$this;
				}

				/**
					* Get locale
					*
					* @return string 
					*/
				public	function	getLocale()	{
								return	$this->locale;
				}

				/**
					* Set avatar
					*
					* @param string $avatar
					*
					* @return User
					*/
				public	function	setAvatar($avatar)	{
								$this->avatar	=	$avatar;

								return	$this;
				}

				/**
					* Get avatar
					*
					* @return string
					*/
				public	function	getAvatar()	{
								return	$this->avatar;
				}

				/**
					* Constructor
					*/
				public	function	__construct()	{
								$this->roles	=	array();
				}

				/**
					* Get id
					*
					* @return integer
					*/
				public	function	getId()	{
								return	$this->id;
				}

				/**
					* Set username
					*
					* @param string $username
					*
					* @return User
					*/
				public	function	setUsername($username)	{
								$this->username	=	$username;

								return	$this;
				}

				/**
					* Get username
					*
					* @return string
					*/
				public	function	getUsername()	{
								return	$this->username;
				}

				/**
					* Set usernameCanonical
					*
					* @param string $usernameCanonical
					*
					* @return User
					*/
				public	function	setUsernameCanonical($usernameCanonical)	{
								$this->usernameCanonical	=	$usernameCanonical;

								return	$this;
				}

				/**
					* Get usernameCanonical
					*
					* @return string
					*/
				public	function	getUsernameCanonical()	{
								return	$this->usernameCanonical;
				}

				/**
					* Set email
					*
					* @param string $email
					*
					* @return User
					*/
				public	function	setEmail($email)	{
								$this->email	=	$email;

								return	$this;
				}

				/**
					* Get email
					*
					* @return string
					*/
				public	function	getEmail()	{
								return	$this->email;
				}

				/**
					* Set emailCanonical
					*
					* @param string $emailCanonical
					*
					* @return User
					*/
				public	function	setEmailCanonical($emailCanonical)	{
								$this->emailCanonical	=	$emailCanonical;

								return	$this;
				}

				/**
					* Get emailCanonical
					*
					* @return string
					*/
				public	function	getEmailCanonical()	{
								return	$this->emailCanonical;
				}

				/**
					* Set enabled
					*
					* @param boolean $enabled
					*
					* @return User
					*/
				public	function	setEnabled($enabled)	{
								$this->enabled	=	$enabled;

								return	$this;
				}

				/**
					* Get enabled
					*
					* @return boolean
					*/
				public	function	getEnabled()	{
								return	$this->enabled;
				}

				/**
					* Get salt
					*
					* @return string
					*/
				public	function	getSalt()	{
								return	$this->salt;
				}

				/**
					* Set password
					*
					* @param string $password
					*
					* @return User
					*/
				public	function	setPassword($password)	{
								$this->password	=	$password;

								return	$this;
				}

				/**
					* Get password
					*
					* @return string
					*/
				public	function	getPassword()	{
								return	$this->password;
				}

				/**
					* Set plainPassword
					*
					* @param string $plainPassword
					*
					* @return User
					*/
				public	function	setPlainPassword($plainPassword)	{
								$this->plainPassword	=	$plainPassword;

								return	$this;
				}

				/**
					* Get plainPassword
					*
					* @return string
					*/
				public	function	getPlainPassword()	{
								return	$this->plainPassword;
				}

				/**
					* Set lastLogin
					*
					* @param \DateTime $lastLogin
					*
					* @return User
					*/
				public	function	setLastLogin(\DateTime	$lastLogin	=	null)	{
								$this->lastLogin	=	$lastLogin;

								return	$this;
				}

				/**
					* Get lastLogin
					*
					* @return \DateTime
					*/
				public	function	getLastLogin()	{
								return	$this->lastLogin;
				}

				/**
					* Set confirmationToken
					*
					* @param string $confirmationToken
					*
					* @return User
					*/
				public	function	setConfirmationToken($confirmationToken)	{
								$this->confirmationToken	=	$confirmationToken;

								return	$this;
				}

				/**
					* Get confirmationToken
					*
					* @return string
					*/
				public	function	getConfirmationToken()	{
								return	$this->confirmationToken;
				}

				/**
					* Set passwordRequestedAt
					*
					* @param \DateTime $passwordRequestedAt
					*
					* @return User
					*/
				public	function	setPasswordRequestedAt(\DateTime	$passwordRequestedAt	=	null)	{
								$this->passwordRequestedAt	=	$passwordRequestedAt;

								return	$this;
				}

				/**
					* Get passwordRequestedAt
					*
					* @return \DateTime
					*/
				public	function	getPasswordRequestedAt()	{
								return	$this->passwordRequestedAt;
				}

				public	function	eraseCredentials()	{
								$this->plainPassword	=	null;
				}

				public	function	isAccountNonExpired():	bool	{
								return	true;
				}

				public	function	isAccountNonLocked():	bool	{
								return	true;
				}

				public	function	isCredentialsNonExpired():	bool	{
								return	true;
				}

				public	function	isEnabled():	bool	{
								return	$this->enabled;
				}

				public	function	isPasswordRequestNonExpired($ttl):	int	{
								return	$this->getPasswordRequestedAt()	instanceof	\DateTime	&&
																$this->getPasswordRequestedAt()->getTimestamp()	+	$ttl	>	time();
				}

				/**
					* {@inheritdoc}
					*/
				public	function	serialize():	string	{
								return	serialize(array(
												$this->password,
												$this->salt,
												$this->usernameCanonical,
												$this->username,
												$this->enabled,
												$this->id,
												$this->email,
												$this->emailCanonical,
								));
				}

				public	function	unserialize($serialized)	{
								$data	=	unserialize($serialized);

								if	(13	===	count($data))	{
												// Unserializing a User object from 1.3.x
												unset($data[4],	$data[5],	$data[6],	$data[9],	$data[10]);
												$data	=	array_values($data);
								}	elseif	(11	===	count($data))	{
												// Unserializing a User from a dev version somewhere between 2.0-alpha3 and 2.0-beta1
												unset($data[4],	$data[7],	$data[8]);
												$data	=	array_values($data);
								}

								list(
																$this->password,
																$this->salt,
																$this->usernameCanonical,
																$this->username,
																$this->enabled,
																$this->id,
																$this->email,
																$this->emailCanonical
																)	=	$data;
				}

				/**
					* Add role
					*
					* @param \CMS\Entity\Role $role
					*
					* @return User
					*/
				public	function	addRole(\CMS\Entity\Role	$role)	{
								$this->roles[]	=	$role;

								return	$this;
				}

				/**
					* Remove role
					*
					* @param \CMS\Entity\Role $role
					*/
				public	function	removeRole(\CMS\Entity\Role	$role)	{
								$this->roles->removeElement($role);
				}

				/**
					* Get roles array from Collection
					*
					* @return \Doctrine\Common\Collections\Collection
					*/
				public	function	getRoles()	{
								$roles	=	$this->roles->toArray();
								foreach	($roles	as	$role)	{
												$role_name[]	=	$role->getName();
								}
								return	$role_name;
				}

}
