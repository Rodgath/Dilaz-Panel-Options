# CHANGELOG

## Version 2


###### v2.5.1
```
= FIXED - Text domain was loading too early, before other plugins/themes were initialized.
```
###### v2.5.0
```
= ADDED - Integration with main plugin namespace
```
###### v2.4.10
```
= ADDED - 'item_url' to use-type parameters
= UPDATED - default-options.php
```
###### v2.4.9
```
= IPROVED - 'radioimage' field sample
= ADDED - 'radioimage_tiled' field sample
```
###### v2.4.8
```
= ADDED - WordPress version check
= ADDED - dilaz_panel_get_use_type() to check current panel "use type"
= ADDED - dilaz_panel_theme_params() to fetch theme object parameters
= ADDED - dilaz_panel_plugin_params() to fetch plugin object parameters
= ADDED - new "use_type" check incase the user adds neither 'plugin' nor 'theme'
= ADDED - code field sample options in default-options.php
````
###### v2.4.7
```
= ADDED - PHP version check
= FIXED - 'DilazPanelFunctions' class check in custom-options-sample.php
```
###### v2.4.6
```
= REMOVED 'options_cap' from config parameters
= ADDED 'options_view_cap' to config parameters
= ADDED 'options_save_cap' to config parameters
```
###### v2.4.5
```
= IMPROVED - Import/Export field is now loaded via 'panel_option_filter_$option_name' hook
= ADDED - 'id' fields to 'heading' and 'subheading' field types
= ADDED - custom options example
```
###### v2.4.4
```
= REMOVED - Font Awesome webfont icons for tab icons
= ADDED - Material Design webfont icons for tab icons
```
###### v2.4.3
```
= FIXED - Empty plugin data returned when there's multiple PHP files in the plugin root directory
```
###### v2.4.2
```
= FIXED - Check if 'DilazPanel' class has been loaded in includes/load.php
```
###### v2.4.1
```
= ADDED - /config-sample.php - Helps in preserving config parameters during updates
```
###### v2.4
```
= FIXED - includes/use-type.php bugs
```
###### v2.3
```
= ADDED - 'menu_position' admin parameter
= ADDED - 'parent_slug' admin parameter
```
###### v2.2
```
= ADDED - 'DilazPanel' plugin requirement error notifications
```
###### v2.1
```
= ADDED - includes/load.php file
= IMPROVED - made admin.php file minimal by moving most of the code into includes/load.php
= FIXED - 'user-type' error notifications
```
###### v2.0.1
```
= MOVED - 'option_name' into parameters
= ADDED - panel attributes field (panel-atts)
= ADDED - $option_args field
```
## Version 1
###### v1.0
```
Initial release.
