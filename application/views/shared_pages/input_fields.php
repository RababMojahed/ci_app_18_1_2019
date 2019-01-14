<?php
function make_input_fields($f_label,$f_type,$f_name,$f_placehold){
	?>
<div class='form-group' >
	<?php
	 echo form_label($f_label);
	 $input_arr=array(
	 	'type'			=>$f_type,
	 	'name'			=>$f_name,
	 	'placeholder'	=>$f_placehold,
	 	'class'			=>'form-control',
	 	'required'		=>'required',
	 	'autofocus'		=>'autofocus'
	 	);
	 echo form_input($input_arr);
	?>	
</div>
<?php	
}//end make_register_fields function
?>
<?php
function make_textarea_field($f_label,$f_name,$f_placehold){
	?>
<div class='form-group' >
	<?php
	 echo form_label($f_label);
	 $input_arr=array(
	 	'type'			=>'textarea',
	 	'name'			=>$f_name,
	 	'placeholder'	=>$f_placehold,
	 	'class'			=>'form-control',
	 	'autofocus'		=>'autofocus',
	 	'rows'			=>4
	 	);
	 echo form_textarea($input_arr);
	?>	
</div>
<?php	
}//end make_register_fields function
?>