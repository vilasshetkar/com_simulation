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



	public function getSimulation1($fixedCosts, $salesQty, $unit, $salesValue, $targetProfit, $solveFor)
	{ 
		$unitPrice = $salesValue / $salesQty;
		$unitContribution = $unitPrice - $unit;
		$unitesBreakEven = $fixedCosts / $unitContribution;
		$revenueBreakEven = $unitesBreakEven * $unitPrice;
		$totalVariableCost =  $unitesBreakEven * $unit;
		$salesQtyForTagetProfit = ($targetProfit / $unitContribution )+ $unitesBreakEven;
		
		
		
			if ($solveFor == 1) $result = "Unite Break Even: ".$unitesBreakEven;
			elseif ($solveFor == 2) $result = "Revenue Break Even: ".$revenueBreakEven;
			elseif ($solveFor == 3) $result = "Total Variable Cost: ".$totalVariableCost;
			elseif ($solveFor == 4) $result = "Fixed costs: ".$fixedCosts;
			elseif ($solveFor == 5) $result = "Unit Price: ".$unitPrice;
			else $result = "Unite Break Even: ".$unitesBreakEven."<br> Revenue Break Even: ".$revenueBreakEven."<br> Total Variable Cost: ".$totalVariableCost."<br> Fixed costs: ".$fixedCosts."<br> Unit Price: ".$unitPrice;
			
			return $result;
	}
}

