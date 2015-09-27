<?php
function inputfield($label, $type, $fieldName){
	?>
	<div style="clear: both; padding-bottom: 25px;">
		<div class="left">
			<?php echo $label;?>
		</div>
		<div class="right">
			<?php if ($type[0] == "dropdown"){?>
			<select>
				<?php for ($i = 0; $i < sizeof($type[1]); $i++){?>
				<option name="<?php echo $type[1][$i][0]?>"><?php echo $type[1][$i][1]?></option>
				<?php }?>
			</select>
			<?php }else{?>
			<input type="<?php echo $type;?>" name="<?php echo $fieldName;?>">
			<?php }?><br>
		</div>
	</div>
	<?php 
}
?>