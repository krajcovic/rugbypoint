<?php /* Smarty version Smarty-3.0.7, created on 2012-05-24 16:19:06
         compiled from "/home/a9729292/public_html/prestashop/modules/cheque/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21267262104fbe435a7e8953-69599258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd3f1619bb7d1e3ee8627a46087c45af7b9085d7' => 
    array (
      0 => '/home/a9729292/public_html/prestashop/modules/cheque/payment.tpl',
      1 => 1337766377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21267262104fbe435a7e8953-69599258',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<p class="payment_module">
	<a href="<?php echo $_smarty_tpl->getVariable('this_path_ssl')->value;?>
payment.php" title="<?php echo smartyTranslate(array('s'=>'Pay by cheque','mod'=>'cheque'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
cheque.jpg" alt="<?php echo smartyTranslate(array('s'=>'Pay by cheque','mod'=>'cheque'),$_smarty_tpl);?>
" width="86" height="49" />
		<?php echo smartyTranslate(array('s'=>'Pay by cheque (order process will be longer)','mod'=>'cheque'),$_smarty_tpl);?>

	</a>
</p>