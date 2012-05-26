<?php /* Smarty version Smarty-3.0.7, created on 2012-05-23 12:32:58
         compiled from "/home/a9729292/public_html/prestashop/themes/prestashop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8021875994fbcbcdab82e29-84144316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71e0860f615ea976f16153a9ce46ff5873042bd5' => 
    array (
      0 => '/home/a9729292/public_html/prestashop/themes/prestashop/footer.tpl',
      1 => 1337766723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8021875994fbcbcdab82e29-84144316',
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
