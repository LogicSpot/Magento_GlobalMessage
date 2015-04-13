#GlobalMessage by [LogicSpot]

This is simple [Magento] module that allows to show message on configured pages 

##Features
- Easy enable/disable message block through Magento configuration
- Set any CMS Static Block as a container of message in configuration
- Easy install in layout xml configuration
 
##Installation
There are 3 ways of installing GlobalMessage module:

- use [modman] script - run modman clone https://github.com/logicspot/global-message
- use [magento-composer-installer] composer wrapper for Magento modules

    Add the "logicspot/global-message" to your project requirements, and run composer update
    
- Download module files and unpack them into your Magento install root directory
 
After installing module, logout and login into admin and clear Magento cache.

##Requirements
This module requires our [Core] module to be installed

##License
This module is distributed under GNU General Public License v3.0. Full text of the License can be found in LICENSE.txt file


[LogicSpot]:http://www.logicspot.com/
[Magento]:http://magento.com/
[modman]:https://github.com/colinmollenhour/modman
[magento-composer-installer]:https://github.com/Cotya/magento-composer-installer
[Core]:https://github.com/logicspot/core