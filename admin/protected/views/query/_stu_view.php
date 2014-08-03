<?php
/* @var $this StuOfferController */
/* @var $data StuOffer */

$detailPage = '/admin/index.php/query/stu_detail?stu_id='.$data->stu_id;
?>

<div class="view">
	<table width="738" border="0" class="newmail">
		<tr>
			<td width="200" height="118" valign="top">
				<?php echo $data->stu_imag; ?>
			</td>
			<td width="30">&nbsp;</td>
			<td width="1016" align="left" valign="top"><p><span class="stulink STYLE1"><strong>
			<?php echo CHtml::encode($data->stu_name); ?>
			</strong></span>&nbsp;&nbsp;&nbsp;
			<?php echo CHtml::encode($data->stu_school); ?>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<?php echo CHtml::encode($data->stu_grade); ?>
			&nbsp;&nbsp;&nbsp;<span class="STYLE1"><strong>（</strong></span><A HREF="<?php echo '/admin/index.php/query/fund_request?stu_id='.$data->stu_id; ?>" target="_blank" class="STYLE2">我要资助</A><span class="STYLE1"><strong>）</strong></span></p>
			<p>
			<?php echo CHtml::encode($data->stu_base); ?>
			</p></td>
		</tr>
		<tr class="stuline">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td align="right" ><span class="STYLE3">建议捐助：<?php echo CHtml::encode($data->stu_maney); ?></span></td>
		</tr>
	</table>
	<table width="738" border="0" class="stuline">
	<!--DWLayoutTable-->
		<tr>
			<td height="3"></td>
		</tr>
	</table>
	<br />

<b><?php /*echo CHtml::encode($data->getAttributeLabel('stu_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->stu_id), array('view', 'id'=>$data->stu_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_number')); ?>:</b>
	<?php echo CHtml::encode($data->stu_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_name')); ?>:</b>
	<?php echo CHtml::encode($data->stu_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_sex')); ?>:</b>
	<?php echo CHtml::encode($data->stu_sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_born')); ?>:</b>
	<?php echo CHtml::encode($data->stu_born); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_base')); ?>:</b>
	<?php echo CHtml::encode($data->stu_base); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_add')); ?>:</b>
	<?php echo CHtml::encode($data->stu_add); ?>
	<br />

	<?php 
	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_school')); ?>:</b>
	<?php echo CHtml::encode($data->stu_school); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_imag')); ?>:</b>
	<?php echo CHtml::encode($data->stu_imag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_grade')); ?>:</b>
	<?php echo CHtml::encode($data->stu_grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_class')); ?>:</b>
	<?php echo CHtml::encode($data->stu_class); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_offer_wait')); ?>:</b>
	<?php echo CHtml::encode($data->stu_offer_wait); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_inq')); ?>:</b>
	<?php echo CHtml::encode($data->stu_inq); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_offer_name')); ?>:</b>
	<?php echo CHtml::encode($data->stu_offer_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_offer_time')); ?>:</b>
	<?php echo CHtml::encode($data->stu_offer_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_offer_mail_time')); ?>:</b>
	<?php echo CHtml::encode($data->stu_offer_mail_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_offer_showname')); ?>:</b>
	<?php echo CHtml::encode($data->stu_offer_showname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_offer_mode')); ?>:</b>
	<?php echo CHtml::encode($data->stu_offer_mode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_offer_email')); ?>:</b>
	<?php echo CHtml::encode($data->stu_offer_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_offer_tel')); ?>:</b>
	<?php echo CHtml::encode($data->stu_offer_tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_offer_city')); ?>:</b>
	<?php echo CHtml::encode($data->stu_offer_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_offer_add')); ?>:</b>
	<?php echo CHtml::encode($data->stu_offer_add); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_maney')); ?>:</b>
	<?php echo CHtml::encode($data->stu_maney); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_integer')); ?>:</b>
	<?php echo CHtml::encode($data->stu_integer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_work_process')); ?>:</b>
	<?php echo CHtml::encode($data->stu_work_process); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stu_timenow')); ?>:</b>
	<?php echo CHtml::encode($data->stu_timenow); ?>
	<br />

	*/ ?>

</div>
