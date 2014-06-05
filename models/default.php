<?php

defined('_JEXEC') or die;

jimport('joomla.application.component.model');

class SimulationModelDefault extends JModelItem

{

	public function __construct($config = array())

         {

                parent::__construct($config);

				 // Set the pagination request variables

				 JRequest::setVar('limit', JRequest::getVar('limit', 5, '', 'int'));

				 JRequest::setVar('limitstart', JRequest::getVar('limitstart', 0, '', 'int'));


                parent::__construct();

         }



	public function getMsg($limit=null)

	{		 


		return true;

	}



}

