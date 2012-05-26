<?php /* Smarty version Smarty-3.0.7, created on 2012-05-24 16:19:06
         compiled from "/home/a9729292/public_html/prestashop/modules/bankwire/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9265370704fbe435a9958a3-23022556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9eb8b4b6e209d20b7c542a0a956b19f9eb6aaa40' => 
    array (
      0 => '/home/a9729292/public_html/prestashop/modules/bankwire/payment.tpl',
      1 => 1337766317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9265370704fbe435a9958a3-23022556',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<p class="payment_module">
	<a href="<?php echo $_smarty_tpl->getVariable('this_path_ssl')->value;?>
payment.php" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
bankwire.jpg" alt="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
" width="86" height="49"/>
		<?php echo smartyTranslate(array('s'=>'Pay by bank wire (order process will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>

	</a>
</p>