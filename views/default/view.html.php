<?php
defined('_JEXEC') or die;

jimport('joomla.application.component.viewlegacy');

class SimulationViewDefault extends JViewLegacy
{
	 public function display($tpl = null)
	 {
		 // Assign data to the view
 		$app	= JFactory::getApplication();
		$params = $app->getParams();
		$menus	= $app->getMenu();
		$menu	= $menus->getActive();
		$model = $this->getModel();
		$layout = $this->getLayout();
		
		switch ($layout)
		{
			case "default": $this->defaultList();
			  break;
			default: $this->createEvent();
		}
		
		 // Display the template
		 parent::display($tpl);
	 }
	 
	 public function defaultList(){
 		$app	= JFactory::getApplication();
		$params = $app->getParams();
		$menus	= $app->getMenu();
		$menu	= $menus->getActive();
		$model = $this->getModel();
		$layout = $this->getLayout();

			

		 // Check for errors.
			 if (count($errors = $this->get('Errors')))
			 {
				 JError::raiseError(500, implode('', $errors));
				 return false;
			 }
	 }
	 
	 

		
}
