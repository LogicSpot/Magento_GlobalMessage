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

    Add the "logicspot/global-message" to your project requirements, and run composer update --no-plugins --no-scripts magento-hackathon/magento-composer-installer
    
- Download module files and unpack them into your Magento install root directory

After installation you need to add `<block type="logicspot_globalmessage/message" name="logicspot_globalmessage" as="logicspot_globalmessage" />` 
to your local.xml file under reference where you need to show the block. If the block is not showing edit the template file 
and add `<?php echo $this->getChildHtml('logicspot_globalmessage'); ?>` in desired place.

If you're using custom package for templates you also need to copy all files from app/design/frontend/base/default/template/logicspot into your package
templates folder.

At the end, logout and login into admin and clear Magento cache, the configuration variable will be shown under LogicSpot tab in Magento configuration.

![Magento Configuration](http://i.imgur.com/hFNmaqQ.png)

##Requirements
This module requires our [Core] module to be installed

##Showcase
Free shipping notification showed on all pages. Configuration of block depends on store, that allows for easy replacement block for different languages:

![English block](http://i.imgur.com/AOcYSEb.png)

![French block](http://imgur.com/YiihYK6.png)

##License
This module is distributed under GNU General Public License v3.0. Full text of the License can be found in LICENSE.txt file


[LogicSpot]:http://www.logicspot.com/
[Magento]:http://magento.com/
[modman]:https://github.com/colinmollenhour/modman
[magento-composer-installer]:https://github.com/Cotya/magento-composer-installer
[Core]:https://github.com/logicspot/core