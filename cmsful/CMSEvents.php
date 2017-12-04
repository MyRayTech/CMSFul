<?php

namespace CMS;

/**
 * CMSEvents
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
final class CMSEvents
{
    /**
     * The REGISTRATION_COMPLETED event occurs after saving the user in the registration process.
     *
     * This event allows you to access the response which will be sent.
     *
     * @Event("CMS\Event\Security\RegistrationEvent")
     */
    const REGISTRATION_COMPLETED = 'cmsful.registration_completed';
    
}
