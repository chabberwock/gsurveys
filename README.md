Gsurveys plugin for Wordpress
===============================

Simple google surveys plugin for wordpress. 

CONFIGURATION
-------------------

Create config.php file in the plugin directory with the following content:

```
return [
    'CONTENT_ID' => 'everything',
    'GCSACCOUNTID' => 'YOUR_ACCOUNT_ID_HERE'
];
```

Edit theme files and add following code right after opening "body" tag:
```
<body>
<?php do_action('gsurveys_script') ?>
```

Use [gsurveys_premium][/gsurveys_premium] shortcode to wrap your premium content
