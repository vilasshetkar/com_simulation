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
			case "registered-user": $this->registeredUser();
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

			$result = $model->getMsg($id = null);
	
			$this->property = $result;
			
	
			 $this->msg = array();
			 for($s=0;$s<count($this->property);$s++)
			 {
				 $this->msg[$s]->greeting = $this->property[$s];
			 }
			 $total = count($this->msg);
			 if (JRequest::getVar('limit') > 0) {
			 $this->msg	= array_splice($this->msg, JRequest::getVar('limitstart'), JRequest::getVar('limit'));
			 }
		 
			 jimport('joomla.html.pagination');
			 $this->_pagination = new JPagination($total, JRequest::getVar('limitstart'), JRequest::getVar('limit') );
			 
			 $this->items = $this->msg;
			 $this->pagination = $this->_pagination;
	
			 JRequest::setVar('limit', JRequest::getVar('limit', 5, '', 'int'));
			 JRequest::setVar('limitstart', JRequest::getVar('limitstart', 0, '', 'int'));
			 
 			$del = JRequest::getVar('del');
			if($del) { echo $model->deleteEvent() ;	 }

		 // Check for errors.
			 if (count($errors = $this->get('Errors')))
			 {
				 JError::raiseError(500, implode('', $errors));
				 return false;
			 }
	 }
	 
	 

		
}
