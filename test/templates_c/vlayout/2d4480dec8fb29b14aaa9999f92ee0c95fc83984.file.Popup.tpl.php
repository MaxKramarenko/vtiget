<?php /* Smarty version Smarty-3.1.7, created on 2022-01-21 11:41:33
         compiled from "C:\Users\m.kramarenko\Downloads\6.5.0\OpenServer.old2\domains\vtigercrm\includes\runtime/../../layouts/vlayout\modules\Settings\Roles\Popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1019561ea9beddc1ef5-93299401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d4480dec8fb29b14aaa9999f92ee0c95fc83984' => 
    array (
      0 => 'C:\\Users\\m.kramarenko\\Downloads\\6.5.0\\OpenServer.old2\\domains\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Roles\\Popup.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1019561ea9beddc1ef5-93299401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'COMPANY_LOGO' => 0,
    'ROOT_ROLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61ea9bede1595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ea9bede1595')) {function content_61ea9bede1595($_smarty_tpl) {?>
<div id="popupPageContainer" class="popupContainer" style="min-height: 600px"><div class="popupContainer padding1per"><div class="row-fluid"><div class="span6"><span><h3><?php echo vtranslate('LBL_ASSIGN_ROLE',"Settings:Roles");?>
</h3></span></div><div class="span6 pull-right"><span class="logo pull-right" style="float: none"><img src="<?php echo $_smarty_tpl->tpl_vars['COMPANY_LOGO']->value->get('imagepath');?>
" title="<?php echo $_smarty_tpl->tpl_vars['COMPANY_LOGO']->value->get('title');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['COMPANY_LOGO']->value->get('alt');?>
"/></div></div><hr></div><div class="popupContainer row-fluid"><div class="clearfix treeView"><ul><li data-role="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getParentRoleString();?>
" data-roleid="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getId();?>
"><div><a href="javascript:;" class="btn btn-inverse"><?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getName();?>
</a></div><?php $_smarty_tpl->tpl_vars["ROLE"] = new Smarty_variable($_smarty_tpl->tpl_vars['ROOT_ROLE']->value, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("RoleTree.tpl","Settings:Roles"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</li></ul></div></div></div><script type="text/javascript">jQuery('body').ready(function(){Settings_Roles_Js.initPopupView()});</script><?php }} ?>