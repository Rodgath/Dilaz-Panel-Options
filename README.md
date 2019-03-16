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
require_once 'Dilaz-Panel-Options/admin.php';
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

***

## *config.php* parameters

| Parameter     | Type          | Since (Dilaz Panel Version)  | Details |
| :------------- |:----------| :-------------| :----- |
| `option_name`   | *string* | 2.4.1 | Used to save settings. Must be unique. |
| `option_prefix` | *string* | 2.4.1 | Not used to save settings. Must be unique. |
| `use_type` | *string* | 2.4.1 | Where the panel is used. Enter `theme` if used within a theme OR `plugin` if used within a plugin |
| `default_options` | *boolean* | 2.4.1 | Whether to load default options. |
| `custom_options` | *boolean* | 2.4.1 | Whether to load custom options. |
| `page_slug` | *string* | 2.4.1 | Must be unique. |
| `page_title` | *string* | 2.4.1 | The text to be displayed in the title tags of the page when the menu is selected. |
| `menu_title` | *string* | 2.4.1 | The text to be used for the menu. |
| `menu_icon` | *string* | 2.4.1 | Dashicon menu icon. |
| `menu_position` | *int* | 2.4.1 | Position in menu order. Works with top-level menu only. |
| `parent_slug` | *string* | 2.4.1 | The slug name for the parent menu (or the file name of a standard WordPress admin page). |
| `admin_bar_menu` | *boolean* | 2.4.1 | 'true' to show panel in admin bar menu. |
| `import_export` | *boolean* | 2.4.1 | 'true' to enable import/export field. |
| `log_title` | *string* | 2.4.1 | Changlelog title. |
| `log_url` | *string* | 2.4.1 | Changlelog url. Leave empty to disable. |
| `doc_title` | *string* | 2.4.1 | Documentation title. |
| `doc_url` | *string* | 2.4.1 | Documentation url. Leave empty to disable. |
| `support_title` | *string* | 2.4.1 | Support title. |
| `support_url` | *string* | 2.4.1 | Support url. Leave empty to disable. |

*** 

