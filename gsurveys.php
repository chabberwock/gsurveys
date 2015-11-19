<?php
/**
* @author Alexandr Makarov
* Email: notengine@gmail.com
*/
namespace chabberwock\gsurveys;

class Gsurveys
{
    private $defaults = [
        'CONTENT_ID' => 'everything',
        'GCSACCOUNTID' => '123'
    ];
    private $config;
    
    private static $_instance;
    
    private function __construct()
    {
        if (file_exists(__DIR__ . '/config.php')) {
            $this->config = array_merge($this->defaults, require(__DIR__ . '/config.php'));
        } else {
            $this->config = $this->defaults;
        }
        add_action('gsurveys_script', [$this, 'addScriptDeclaration']);
        add_shortcode('gsurveys_premium', [$this, 'shortcodePremiumContent']);
    }
    
    
    public function addScriptDeclaration()
    {
        if (has_shortcode(get_the_content(), 'gsurveys_premium')) {
            include __DIR__ . '/views/script.php';
        }
    }
    
    public function shortcodePremiumContent($atts, $content=null)
    {
        return '<div class="p402_premium">' . $content . '</div>';
    }
    
    
    public function getInstance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

}
  
?>
