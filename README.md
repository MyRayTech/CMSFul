 CMSFul
=======
[![Build Status](https://travis-ci.org/MyRayTech/CMSFul.svg?branch=master)](https://travis-ci.org/MyRayTech/CMSFul)

### This script is still in alpha stage so new features are always released, and
### has bugs please post any you find in the issue tracker here on github.

No template are made for theming and not all available variables are in the templates but can be used

CMSFul is configured with the following defaults:

   * Twig as the only configured template engine;

   * Doctrine ORM/DBAL;

   * Swiftmailer;

It comes pre-configured with the following bundles:

   * FrameworkBundle - The core Symfony framework bundle

   * KnPLabs\KnpPaginatorBundle - Adds support for pagination

   * DoctrineBundle - Adds support for the Doctrine ORM

   * TwigBundle - Adds support for the Twig templating engine

   * SecurityBundle - Adds security by integrating Symfony's security component

   * SwiftmailerBundle - Adds support for Swiftmailer, a library for sending emails

   * MonologBundle - Adds support for Monolog, a logging library

   * WebProfilerBundle (in dev/test env) - Adds profiling functionality and the web debug toolbar

   * SensioDistributionBundle (in dev/test env) - Adds functionality for configuring and working with Symfony distributions

   * SensioGeneratorBundle (in dev/test env) - Adds code generation capabilities

   * DebugBundle (in dev/test env) - Adds Debug and VarDumper component integration

All libraries and bundles included in the Symfony Framework Bundles are released under the MIT or BSD license.

## Currently working areas

Content Pages       (both admin and user side)  
Projects Portfolio  (both admin and user side, just need to finalize templates)  
Image Gallery       (both admin and user side)  
News Articles       (both admin and user side)  
Blog Posts          (both admin and user side)  
Navigation          (both admin and user side)  
Comments            (currently only on news and blog systems)  
Users               (needs to be created by config for now thru memory and after create one in the system)