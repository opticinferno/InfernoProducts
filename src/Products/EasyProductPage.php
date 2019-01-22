<?php

namespace Inferno\InfernoProducts\Products;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\DropdownField;

class EasyProductPage extends \Page {

	// Add CMS description
    private static $description = "Add a Easy Product Page";
    private static $singular_name = 'Easy Product Page';
    private static $table_name = 'ProductPage';

	// Database fields
	private static $db = array(
	'Tech' => 'HTMLText',
	'DisplaySidebar'=>'Varchar'
	);

	// Has one relationship with ProductContainerPage
    private static $has_one = array(
    'ContainerPage' => 'EasyProductContainerPage',
	'ProductPic'=>'Image',
	//'Brochure' => 'File'
  	);


    private static $has_many = array(
    'Testimonials' => 'Testimonial',
  	);

	// Add fields to CMS
	public function getCMSFields() {
	$fields = parent::getCMSFields();

	$fields->removeFieldFromTab("Root.Main", "Enquire");
	$fields->addFieldToTab("Root.Attachments", new UploadField('ProductPic','Main product image'));
		$sidebarArray = array('0'=>'No','1'=>'Yes');
	$fields->addFieldToTab("Root.Main", new DropdownField('DisplaySidebar','Display Sidebar?',$sidebarArray),'Content');
	$fields->removeByName("Blocks");
	$fields->removeByName("Widgets");
	$fields->removeByName("CustomPhotos");
	//$fields->addFieldToTab('Root.Attachments', UploadField::create('Brochure','Travel brochure, optional (PDF only)'));

	$gridFieldConfig=GridFieldConfig_RelationEditor::create(10);
	$gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));
	//$gridField = new GridField("Testimonials", "Testimonials",$this->Testimonials(), $gridFieldConfig);
	//$fields->addFieldToTab("Root.Testimonials", $gridField);

	//$fields->addFieldToTab('Root.Technical', HTMLEditorField::create('Tech', 'technical specification'));



	return $fields;
	}

}

class EasyProductPage_Controller extends \PageController {

		public function init() {
        parent::init();

	}

	}

