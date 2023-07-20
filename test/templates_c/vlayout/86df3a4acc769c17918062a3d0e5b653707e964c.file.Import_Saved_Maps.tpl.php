<?php /* Smarty version Smarty-3.1.7, created on 2022-01-21 11:30:28
         compiled from "C:\Users\m.kramarenko\Downloads\6.5.0\OpenServer.old2\domains\vtigercrm\includes\runtime/../../layouts/vlayout\modules\Import\Import_Saved_Maps.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2853461ea9954c8cc87-86502494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86df3a4acc769c17918062a3d0e5b653707e964c' => 
    array (
      0 => 'C:\\Users\\m.kramarenko\\Downloads\\6.5.0\\OpenServer.old2\\domains\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\Import\\Import_Saved_Maps.tpl',
      1 => 1642713922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2853461ea9954c8cc87-86502494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'SAVED_MAPS' => 0,
    '_MAP_ID' => 0,
    '_MAP' => 0,
    'FOR_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61ea9954ca79f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ea9954ca79f')) {function content_61ea9954ca79f($_smarty_tpl) {?>

<select name="saved_maps" id="saved_maps" class="font-x-small chzn-select" onchange="ImportJs.loadSavedMap();">
	<option id="-1" value="" selected>--<?php echo vtranslate('LBL_SELECT_SAVED_MAPPING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
--</option>
	<?php  $_smarty_tpl->tpl_vars['_MAP'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_MAP']->_loop = false;
 $_smarty_tpl->tpl_vars['_MAP_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SAVED_MAPS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_MAP']->key => $_smarty_tpl->tpl_vars['_MAP']->value){
$_smarty_tpl->tpl_vars['_MAP']->_loop = true;
 $_smarty_tpl->tpl_vars['_MAP_ID']->value = $_smarty_tpl->tpl_vars['_MAP']->key;
?>
	<option id="<?php echo $_smarty_tpl->tpl_vars['_MAP_ID']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['_MAP']->value->getStringifiedContent();?>
"><?php echo $_smarty_tpl->tpl_vars['_MAP']->value->getValue('name');?>
</option>
	<?php } ?>
</select>
<span id="delete_map_container" style="display:none;">
	<i class="icon-trash cursorPointer" onclick="ImportJs.deleteMap('<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
');" alt="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
"></i>
</span><?php }} ?>