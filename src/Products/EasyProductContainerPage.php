<?php
namespace Inferno\InfernoProducts\Products;

class EasyProductContainerPage extends \Page {

	// Add CMS description
	private static $description = "Add a Easy Product Container Page";
    private static $singular_name = 'Easy Product Container Page';
    private static $table_name = 'ProductContainer';

	// Database fields
	private static $db = array(
	);

	// One container page has many products pages
    private static $has_many = array(
    	'ProductPages' => 'EasyProductPage'
  	);

	//Set page types that are allowed to be used in container
    private static $allowed_children = array(
		'EasyProductPage'
	);
}
class EasyProductContainerPage_Controller extends \PageController {

	public function init() {
        parent::init();

	}
}


