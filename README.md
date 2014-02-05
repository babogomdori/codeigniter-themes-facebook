CodeIgniter, Themes & Facebook Integration
==

CodeIgniter v.2.1.4, Custom Themes (Bootstrap v.3.1.0) &amp; Facebook Integration (PHP SDK v.3.2.3).

#### Example

Theme assets are located in the /assets/ folder. Main theme files are located in the application/views/themes/ folder.

If there's an update of the Facebook PHP SDK available, just replace 'facebook.php' and 'base_facebook.php' in /third_party/facebook/libraries/.

```
class Home extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		// Load Facebook Library
		$this->load->library('facebook_init');
		
		$this->_init();		
	}
	
	private function _init() {
	
		// Set Template
		$this->output->set_template('default');

		// Load Template assets
		$this->load->js('https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
		$this->load->js('https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js');
		$this->load->js('https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js');
		$this->load->css('https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css');
				
	}
	
	function index()
	{
					
		// Access the Facebook library via $this->facebook		
        $userId = $this->facebook->getUser();
 
        // If user is not yet authenticated, the id will be zero
        if($userId == 0){
        
            // Generate a login url
            $data['loginUrl'] = $this->facebook->getLoginUrl(array('scope'=>'email,user_location'));

			// Load view
			$this->load->section('sidebar', 'sections/menu');		
			$this->load->view('home',$data);
            
        } else {
        
            // Generate a logout url
            $data['logoutUrl'] = $this->facebook->getLogoutUrl();
        
            // Get user's data and print it
            $data['user'] = $this->facebook->api('/me');
            
            // Load view
			$this->load->section('sidebar', 'sections/menu');		
			$this->load->view('home',$data);            
            
        }						
	}
}

```

## Installation

1. Upload files
2. Define database settings in 'application/config/database.php'
3. Define Facebook settings in 'application/config/facebook.php'
4. Go!

#### Credits

Build upon [CodeIgniter-Simplicity](https://github.com/scoumbourdis/codeigniter-simplicity) by John Skoumbourdis and the official [Facebook PHP SDK](https://github.com/facebook/facebook-php-sdk).