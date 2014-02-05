CodeIgniter, Themes & Facebook Integration
=

CodeIgniter v.2.1.4, Custom Themes (Bootstrap v.3.1.0) &amp; Facebook Integration (PHP SDK v.3.2.3).

## Installation

1. Upload files
2. Define database settings in /application/config/database.php
3. Define Facebook settings in /application/config/facebook.php
4. Go!

## Usage

* Theme assets are located in the /assets/ folder. Main theme files are located in the application/views/themes/ folder.
* If there's an update of the Facebook PHP SDK available, just replace 'facebook.php' and 'base_facebook.php' in /third_party/facebook/libraries/.


```
// Load Facebook PHP SDK
$this->load->library('facebook_init');

// Access the Facebook PHP SDK
$data['loginUrl'] = $this->facebook->getLoginUrl(array('scope'=>'email'));

```

```
// Set the main template for this page
$this->output->set_template('default');

// Load the template assets for this page
$this->load->js('https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
$this->load->css('https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css');
```

## Example

See for an example the Home controller /controllers/home.php

#### Credits

Build upon [CodeIgniter-Simplicity](https://github.com/scoumbourdis/codeigniter-simplicity) by John Skoumbourdis and the official [Facebook PHP SDK](https://github.com/facebook/facebook-php-sdk).