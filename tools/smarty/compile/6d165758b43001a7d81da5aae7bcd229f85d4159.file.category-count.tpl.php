<?php /* Smarty version Smarty-3.0.7, created on 2012-05-24 12:46:09
         compiled from "/home/a9729292/public_html/prestashop/themes/prestashop/./category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19996896684fbe1171ebbe36-83602971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d165758b43001a7d81da5aae7bcd229f85d4159' => 
    array (
      0 => '/home/a9729292/public_html/prestashop/themes/prestashop/./category-count.tpl',
      1 => 1337766720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19996896684fbe1171ebbe36-83602971',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php if ($_smarty_tpl->getVariable('category')->value->id==1||$_smarty_tpl->getVariable('nb_products')->value==0){?><?php echo smartyTranslate(array('s'=>'There are no products.'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->getVariable('nb_products')->value==1){?><?php echo smartyTranslate(array('s'=>'There is'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'There are'),$_smarty_tpl);?>
<?php }?>
	<?php echo $_smarty_tpl->getVariable('nb_products')->value;?>

	<?php if ($_smarty_tpl->getVariable('nb_products')->value==1){?><?php echo smartyTranslate(array('s'=>'product.'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'products.'),$_smarty_tpl);?>
<?php }?>
<?php }?>