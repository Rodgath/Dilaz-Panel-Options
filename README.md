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

| Parameter     | Type    | Default | Since  | Details |
| :------------- |:----------|:----------| :-------------| :----- |
| `option_name`   | *string* | dilaz_options | Dilaz Panel v2.3 | Used to save settings. Must be unique. |
| `option_prefix` | *string* | dilaz_panel | Dilaz Panel v2.0 | Not used to save settings. Must be unique. |
| `use_type` | *string* | theme | Dilaz Panel v2.0 | Where the panel is used. Enter `theme` if used within a theme OR `plugin` if used within a plugin |
| `default_options` | *boolean* | true | Dilaz Panel v2.0 | Whether to load default options. |
| `custom_options` | *boolean* | true | Dilaz Panel v2.0 | Whether to load custom options. |
| `page_slug` | *string* | dilaz_panel | Dilaz Panel v2.0 | Must be unique. |
| `page_title` | *string* | Dilaz Panel | Dilaz Panel v2.0 | The text to be displayed in the title tags of the page when the menu is selected. |
| `menu_title` | *string* | Dilaz Panel | Dilaz Panel v2.0 | The text to be used for the menu. |
| `options_view_cap` | *array* | array('manage_options') | Dilaz Panel v2.7.8 | The capabilities required for this menu to be displayed to the user. |
| `options_save_cap` | *array* | array('manage_options') | Dilaz Panel v2.7.8 | The capabilities required for the user to save the options for the panel. |
| `menu_icon` | *string* | null | Dilaz Panel v2.0 | Dashicon menu icon. |
| `menu_position` | *int* | null | Dilaz Panel v2.3 | Position in menu order. Works with top-level menu only. |
| `parent_slug` | *string* | null | Dilaz Panel v2.3 | The slug name for the parent menu (or the file name of a standard WordPress admin page). |
| `admin_bar_menu` | *boolean* | true | Dilaz Panel v2.0 | 'true' to show panel in admin bar menu. |
| `import_export` | *boolean* | true | Dilaz Panel v2.0 | 'true' to enable import/export field. |
| `log_title` | *string* | Changelog | Dilaz Panel v2.0 | Changlelog title. |
| `log_url` | *string* | # | Dilaz Panel v2.0 | Changlelog url. Leave empty to disable. |
| `doc_title` | *string* | Documentation | Dilaz Panel v2.0 | Documentation title. |
| `doc_url` | *string* | # | Dilaz Panel v2.0 | Documentation url. Leave empty to disable. |
| `support_title` | *string* | Support | Dilaz Panel v2.0 | Support title. |
| `support_url` | *string* | # | Dilaz Panel v2.0 | Support url. Leave empty to disable. |
| ~~`options_cap`~~ | *string* | manage_options | Dilaz Panel v2.0 | __Deprecated__ since v2.7.8. |

*** 

