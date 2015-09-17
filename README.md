# WPadminFix
Fix the scrambled wp-admin sidebar menu on chrome that Wordpress REFUSES to address.  

### You don't need a plugin! just add this code to your functions.php file
```php
  function fix_wpadmin_css() {
  ?><style>#adminmenu { transform: translateZ(0); }</style><?
  }
  add_action('admin_head', 'fix_wpadmin_css', 11);
```
---
If you like it you may buy me a beer https://goo.gl/pz4fjf :)
or follow me on http://twitter.com/nodws http://codepen.io/nodws
