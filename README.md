# Symfony 2.7 project with support for Twitter Bootstrap 


This project is a skeleton for future projects integrating several third party libraries and bundles. 

Currently the following features are supported:
 
 * Twitter bootstrap integration
    * using the default css markup
    * supports customization of less files found in `app/Resources/less/bootstrap` (I use a less file watcher in PHPStorm) 
    to generate the file `app/Resources/css/boostrap.css ` needed by the assetic configuration in `app/config/assetic.yml`
 * Font Awesome icons
 * KnpMenuBundle integration including Font Awesome icons
    * some secured items in the navigation as well as login and logout support
 * FOSUserBundle integration
    * main forms for login, registration, resetting password have been updated to bootstrap markup
 * HWIOAuthBundle integration allowing a login to the site with facebook and google accounts
     * this is more a proof of concept, user account handling especially in regards of email vs. username creation needs to be implemented
 
## Integrated libraries and bundles
 
* [KnpMenuBundle](https://github.com/KnpLabs/KnpMenuBundle)
* [DoctrineBehaviours](https://github.com/KnpLabs/DoctrineBehaviors)
* [FontAwesome](https://github.com/FortAwesome/Font-Awesome)
* [Bootstrap](https://github.com/twbs/bootstrap)
* [BraincraftedBootstrapBundle](https://github.com/braincrafted/bootstrap-bundle)
* [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle)
* [HWIOAuthBundle](https://github.com/hwi/HWIOAuthBundle)



## Configuration

The assetic configuration has been moved to a separate `app/config/assetic.yml` configuration file. 


