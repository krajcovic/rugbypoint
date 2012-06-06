<?php /* Smarty version Smarty-3.0.7, created on 2012-05-26 22:11:23
         compiled from "/var/www/shop/rugbypoint/themes/prestashop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2258385574fc138eb4003d1-46535616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d7dccd802f8e9e323784ccdfb00d8d3fc0f1c58' => 
    array (
      0 => '/var/www/shop/rugbypoint/themes/prestashop/footer.tpl',
      1 => 1338058567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2258385574fc138eb4003d1-46535616',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


		<?php if (!$_smarty_tpl->getVariable('content_only')->value){?>
				</div>

<!-- Right -->
				<div id="right_column" class="column">
					<?php echo $_smarty_tpl->getVariable('HOOK_RIGHT_COLUMN')->value;?>

				</div>
			</div>

<!-- Footer -->
			<div id="footer"><?php echo $_smarty_tpl->getVariable('HOOK_FOOTER')->value;?>
</div>
		</div>
	<?php }?>
	</body>
</html>
