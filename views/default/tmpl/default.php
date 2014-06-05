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

    jQuery(document).ready(function(){
		jQuery("#btn").click(function(e) {
			jQuery.ajax({
				type: "POST",
				url: "index.php?option=com_simulation&task=calculate&format=raw",
				data: {
					val1 : 40,
					val2 : 50
				},
				success: function(data){
					jQuery("#data").html(data);
				   alert(data);
				}
			});
        });
    });
');

?>
<script type="text/javascript">

	
</script>

<button id="btn">Ajax Call</button>
<div id="data">Nothing</div>
<hr class="divider">
