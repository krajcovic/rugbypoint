<?php /* Smarty version Smarty-3.0.7, created on 2012-05-26 22:11:21
         compiled from "/var/www/shop/rugbypoint/modules/blockcategories/blockcategories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21088499314fc138e927e0f7-95784795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8418d4477a9e20d269fd51638411ad2ec21bc992' => 
    array (
      0 => '/var/www/shop/rugbypoint/modules/blockcategories/blockcategories.tpl',
      1 => 1338058567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21088499314fc138e927e0f7-95784795',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<h4><?php echo smartyTranslate(array('s'=>'Categories','mod'=>'blockcategories'),$_smarty_tpl);?>
</h4>
	<div class="block_content">
		<ul class="tree <?php if ($_smarty_tpl->getVariable('isDhtml')->value){?>dhtml<?php }?>">
		<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('blockCategTree')->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
if ($_smarty_tpl->tpl_vars['child']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blockCategTree']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['blockCategTree']['last']){?>
				<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('branche_tpl_path')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
$_template->assign('node',$_smarty_tpl->tpl_vars['child']->value);$_template->assign('last','true'); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
			<?php }else{ ?>
				<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('branche_tpl_path')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
$_template->assign('node',$_smarty_tpl->tpl_vars['child']->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
			<?php }?>
		<?php }} ?>
		</ul>
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
