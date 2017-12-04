<?php

namespace	CMS\Security;

use	CMS\Entity\User;
use	Symfony\Component\HttpFoundation\Request;
use	CMS\Security\User\ApiKeyUserProvider;
use	Symfony\Component\Security\Core\Authentication\Token\PreAuthenticatedToken;
use	Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use	Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use	CMS\Exception\ApiKeyNotFoundException;
use	Symfony\Component\Security\Core\User\UserProviderInterface;
use	Symfony\Component\Security\Http\Authentication\SimplePreAuthenticatorInterface;

/**
	* ApiKeyAuthenticator
	*
	* @author Kevin Roy <royk@myraytech.net>
	*/
class	ApiKeyAuthentication	implements	SimplePreAuthenticatorInterface	{

				public	function	createToken(Request	$request,	$providerKey)	{
								if	(!$request->headers->has('x-api-key'))	{
												// look for an apikey query parameter
												$apiKey	=	$request->query->get('apikey');
								}	else	{
												// or if you want to use an "apikey" header, then do something like this:
												$apiKey	=	$request->headers->get('x-api-key');
								}
								if	(!$apiKey)	{
												throw	new	ApiKeyNotFoundException();
												// or to just skip api key authentication
												// return null;
								}

								return	new	PreAuthenticatedToken(
																'anon.',
																$apiKey,
																$providerKey
								);
				}

				public	function	supportsToken(TokenInterface	$token,	$providerKey)	{
								return	$token	instanceof	PreAuthenticatedToken	&&	$token->getProviderKey()	===	$providerKey;
				}

				public	function	authenticateToken(TokenInterface	$token,	UserProviderInterface	$userProvider,	$providerKey)	{
								if	(!$userProvider	instanceof	ApiKeyUserProvider)	{
												throw	new	\InvalidArgumentException(
												sprintf('The user provider must be an instance of ApiKeyUserProvider (%s was given).',	get_class($userProvider))
												);
								}


								$apiKey			=	$token->getCredentials();
								$username	=	$userProvider->getUsernameForApiKey($apiKey);

								// User is the Entity which represents your user
								$user	=	$token->getUser();
								if	($user	instanceof	User)	{
												return	new	PreAuthenticatedToken(
																				$user,	$apiKey,	$providerKey,	$user->getRoles()
												);
								}


								if	(!$username)	{
												// CAUTION: this message will be returned to the client
												// (so don't put any un-trusted messages / error strings here)
												throw	new	CustomUserMessageAuthenticationException('API Key does not exist.');
								}

								$user	=	$userProvider->loadUserByUsername($username);

								return	new	PreAuthenticatedToken(
																$user,	$apiKey,	$providerKey,	$user->getRoles()
								);
				}

}
