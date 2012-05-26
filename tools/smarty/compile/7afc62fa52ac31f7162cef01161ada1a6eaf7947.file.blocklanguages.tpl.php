<?php /* Smarty version Smarty-3.0.7, created on 2012-05-23 12:32:56
         compiled from "/home/a9729292/public_html/prestashop/modules/blocklanguages/blocklanguages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18885077134fbcbcd8d01222-95287325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7afc62fa52ac31f7162cef01161ada1a6eaf7947' => 
    array (
      0 => '/home/a9729292/public_html/prestashop/modules/blocklanguages/blocklanguages.tpl',
      1 => 1337766639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18885077134fbcbcd8d01222-95287325',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/a9729292/public_html/prestashop/tools/smarty/plugins/modifier.escape.php';
?>

<!-- Block languages module -->
<div id="languages_block_top">
	<ul id="first-languages">
		<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('languages')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
			<li <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']==$_smarty_tpl->getVariable('lang_iso')->value){?>class="selected_language"<?php }?>>
				<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']!=$_smarty_tpl->getVariable('lang_iso')->value){?>
					<?php $_smarty_tpl->tpl_vars['indice_lang'] = new Smarty_variable($_smarty_tpl->tpl_vars['language']->value['id_lang'], null, null);?>
					<?php if (isset($_smarty_tpl->getVariable('lang_rewrite_urls',null,true,false)->value[$_smarty_tpl->getVariable('indice_lang',null,true,false)->value])){?>
						<a href="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('lang_rewrite_urls')->value[$_smarty_tpl->getVariable('indice_lang')->value],'htmlall');?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
">
					<?php }else{ ?>
						<a href="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('link')->value->getLanguageLink($_smarty_tpl->tpl_vars['language']->value['id_lang']),'htmlall');?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
">
					<?php }?>

				<?php }?>
					<img src="<?php echo $_smarty_tpl->getVariable('img_lang_dir')->value;?>
<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
" width="16" height="11" />
				<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']!=$_smarty_tpl->getVariable('lang_iso')->value){?>
					</a>
				<?php }?>
			</li>
		<?php }} ?>
	</ul>
</div>
<script type="text/javascript">
	$('ul#first-languages li:not(.selected_language)').css('opacity', 0.3);
	$('ul#first-languages li:not(.selected_language)').hover(function(){
		$(this).css('opacity', 1);
	}, function(){
		$(this).css('opacity', 0.3);
	});
</script>
<!-- /Block languages module -->

