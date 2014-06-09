<?php

/**

* Author:	Omar Muhammad

* Email:	admin@omar84.com

* Website:	http://omar84.com

* Component:Blank Component

* Version:	3.0.0

* Date:		03/11/2012

* copyright	Copyright (C) 2012 http://omar84.com. All Rights Reserved.

* @license	http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

**/

// no direct access

defined('_JEXEC') or die;


$document = JFactory::getDocument();

 

// Add Javascript directly here

$document->addScriptDeclaration('

');

?>
<script type="text/javascript">
    jQuery(document).ready(function(){
		jQuery("#btn").click(function(e) {

			jQuery.ajax({
				type: "POST",
				url: "index.php?option=com_simulation&task=simulation1&format=raw",
				data: jQuery("#form1").serialize(),
				success: function(data){
					jQuery("#data").html(data);
				   alert(data);
				}
			});
        });
    });

	
</script>

<div class="row-fluid">
		<form id="form1" action="" method="post">
        	<fieldset>
            	<legend>Input</legend>
	<div class="row-fluid">

	<div class="span6">
                  <div class="control-group">
                    <label class="control-label" for="fixed-costs">Fixed Costs:</label>
                    <div class="controls">
                      <input type="text" id="fixed-costs" name="fixed-costs" placeholder="Fixed Costs" required>
                    </div>
                  </div><!-- Fixed Costs -->

                  <div class="control-group">
                    <label class="control-label" for="sales-qty">Sales Qty:</label>
                    <div class="controls">
                      <input type="text" id="sales-qty" name="sales-qty" placeholder="Sales Qty" required>
                    </div>
                  </div><!-- Sales Qty -->

                  <div class="control-group">
                    <label class="control-label" for="unit">Var. Costs/Unit:</label>
                    <div class="controls">
                      <input type="text" id="unit" name="unit" placeholder="Var. Costs/Unit" required>
                    </div><!-- Var. Costs/Unit -->
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="sales-value">Sales Value: </label>
                    <div class="controls">
                      <input type="text" id="sales-value" name="sales-value" placeholder="Sales Value" required>
                    </div><!-- Sales Value -->
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="target-profit">Target Profit: </label>
                    <div class="controls">
                      <input type="text" id="target-profit" name="target-profit" placeholder="Target Profit" required>
                    </div><!-- target-profit -->
                    </div>

	</div>
	<div class="span6">
                  <div class="control-group">
                    <label class="control-label" for="sales-value">Product Name: </label>
                    <div class="controls">
                      <input type="text" id="sales-value" placeholder="Product Name">
                    </div><!-- Product Name -->
                  </div>
                 
                  <div class="control-group">
                    <label class="control-label" for="solve-for">Solve For: </label>
                    <div class="controls">
                    <select name="solve-for" id="solve-for">
                    	<option value="0" selected="selected">All</option>
                      	<option value="1">Units to Break Even</option>
                    	<option value="2">Revenue to Break Even</option>
                    	<option value="3">Total Variable Costs</option>
                    	<option value="4">Total Fixed Costs</option>
                    	<option value="5">Unit Price</option>
</select>
                    </div><!-- Var. Costs/Unit -->
                  </div>

	</div>
    </div>
            </fieldset>
<button type="button" id="btn">Calculate</button>
        </form>
</div>


<div id="data">Nothing</div>
<hr class="divider">
