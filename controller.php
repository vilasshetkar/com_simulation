<?php

ini_set('display_errors','off');
//ini_set('display_errors',0);
//ini_set('display_startup_errors',-1);
//error_reporting(0);

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerlegacy');

class SimulationController extends JControllerLegacy
{

	public function display($cachable = false, $urlparams = false)
	{
//		$view = $this->getView(JRequest::getVar('view'), 'html');
//		$view->setModel($this->getModel('default'), true); // Default model
		//JRequest::setVar('view',JRequest::getVar('view')); // force it to be the search view		
		//JRequest::setVar('layout',JRequest::getVar('layout')); // force it to be the search view		
//		return $view;
		return parent::display($cachable, $urlparams);
	}
	
	public function simulation1(){
		$model = $this->getModel('default');
		
		$solveFor = JRequest::getVar("solve-for");
		
		$fixedCosts = JRequest::getVar("fixed-costs");
		$salesQty = JRequest::getVar("sales-qty");
		$unit = JRequest::getVar("unit");
		$salesValue = JRequest::getVar("sales-value");
		$targetProfit = JRequest::getVar("target-profit");
		
		echo $model->getSimulation1($fixedCosts, $salesQty, $unit, $salesValue, $targetProfit, $solveFor);



		//echo $val1 + $val2;
		//exit;
	}

}
