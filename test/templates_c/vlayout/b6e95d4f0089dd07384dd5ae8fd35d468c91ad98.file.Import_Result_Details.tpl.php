<?php /* Smarty version Smarty-3.1.7, created on 2022-01-21 11:31:11
         compiled from "C:\Users\m.kramarenko\Downloads\6.5.0\OpenServer.old2\domains\vtigercrm\includes\runtime/../../layouts/vlayout\modules\Import\Import_Result_Details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2978861ea997f955988-96857531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6e95d4f0089dd07384dd5ae8fd35d468c91ad98' => 
    array (
      0 => 'C:\\Users\\m.kramarenko\\Downloads\\6.5.0\\OpenServer.old2\\domains\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\Import\\Import_Result_Details.tpl',
      1 => 1642713922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2978861ea997f955988-96857531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'IMPORT_RESULT' => 0,
    'FOR_MODULE' => 0,
    'INVENTORY_MODULES' => 0,
    'OWNER_ID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61ea997f99d91',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ea997f99d91')) {function content_61ea997f99d91($_smarty_tpl) {?>

<table cellpadding="5" cellspacing="0" align="center" width="100%" class="dvtSelectedCell thickBorder importContents">
	<tr>
		<td><?php echo vtranslate('LBL_TOTAL_RECORDS_IMPORTED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td>
		<td width="10%">:</td>
		<td width="30%"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['IMPORTED'];?>
 / <?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['TOTAL'];?>
</td>
	</tr>
	<tr>
		<td><?php echo vtranslate('LBL_NUMBER_OF_RECORDS_CREATED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td>
		<td width="10%">:</td>
		<td width="30%"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['CREATED'];?>
</td>
	</tr>
	<?php if (in_array($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['INVENTORY_MODULES']->value)==false){?>
		<tr>
			<td><?php echo vtranslate('LBL_NUMBER_OF_RECORDS_UPDATED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td>
			<td width="10%">:</td>
			<td width="30%"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['UPDATED'];?>
</td>
		</tr>
		<tr>
			<td><?php echo vtranslate('LBL_NUMBER_OF_RECORDS_SKIPPED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td>
			<td width="10%">:</td>
			<td width="30%"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['SKIPPED'];?>

			<?php if ($_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['SKIPPED']!='0'){?>
				&nbsp;&nbsp;<a class="cursorPointer" 
					onclick="return window.open('index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&view=List&mode=getImportDetails&type=skipped&start=1&foruser=<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
','skipped','width=700,height=650,resizable=no,scrollbars=yes,top=150,left=200');">
				<?php echo vtranslate('LBL_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
			<?php }?>
			</td>
		</tr>
		<tr>
			<td><?php echo vtranslate('LBL_NUMBER_OF_RECORDS_MERGED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td>
			<td width="10%">:</td>
			<td width="10%"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['MERGED'];?>
</td>
		</tr>
	<?php }?>
	<tr>
		<td><?php echo vtranslate('LBL_TOTAL_RECORDS_FAILED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td>
		<td width="10%">:</td>
		<td width="30%"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['FAILED'];?>
 / <?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['TOTAL'];?>

		<?php if ($_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['FAILED']!='0'){?>
			&nbsp;&nbsp;<a class="cursorPointer" onclick="return window.open('index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&view=List&mode=getImportDetails&type=failed&start=1&foruser=<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
','failed','width=700,height=650,resizable=no,scrollbars=yes,top=150,left=200');"><?php echo vtranslate('LBL_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
		<?php }?>
		</td>
	</tr>
</table><?php }} ?>