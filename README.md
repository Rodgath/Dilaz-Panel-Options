# Dilaz Panel Options Sample
This helps you to integrate [Dilaz Panel Plugin](https://github.com/Rodgath/Dilaz-Panel-Plugin) into your WordPress theme/plugin development. 

## How to use
1. Download and install [Dilaz Panel](https://github.com/Rodgath/Dilaz-Panel-Plugin/archive/master.zip) plugin.
2. Download [Dilaz Panel Options](https://github.com/Rodgath/Dilaz-Panel-Options/archive/master.zip).
3. Add *Dilaz-Panel-Options* to the root directory of your theme or plugin. <br />
   i) For example: <br />
      > *wp-content/__theme-name__/Dilaz-Panel-Options*
      
      __OR__
      
      > *wp-content/__plugin-name__/Dilaz-Panel-Options* <br />
      
   ii) You can optionally rename *Dilaz-Panel-Options* folder.
4. Add the code provided below in your themes __functions.php__ file or in your plugin's __main/index__ file. 
```php
/**
 * Admin Panel Options
 */
require_once 'Dilaz-Paneles-Options/admin.php';
```
5. Open ```Dilaz-Panel-Options``` folder and rename ```config-sample.php``` to ```config.php```.
6. Open ```Dilaz-Panel-Options/config.php``` and edit the parameters as you want. Simple guidelines are provided beside each parameter setting.
7. Open ```Dilaz-Panel-Options/options``` folder and rename ```options-sample.php``` to ```options.php```.
8. Open ```Dilaz-Panel-Options/options/options.php``` and add your admin options. 

***

__NOTE:__
1. ```Dilaz-Panel-Options/custom-options-sample.php``` contains examples showing how to use actions hooks to add custom admin options to any Dilaz Panel implementation.
2. ```Dilaz-Panel-Options/default-options.php``` contains default options as examples for all possible admin fields.
3. ```Dilaz-Panel-Options/import-export.php``` contains import/export option settings.


   

