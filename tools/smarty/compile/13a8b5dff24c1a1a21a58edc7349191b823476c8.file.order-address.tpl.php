<?php /* Smarty version Smarty-3.0.7, created on 2012-05-24 16:16:00
         compiled from "/home/a9729292/public_html/prestashop/themes/prestashop/order-address.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5543162064fbe42a00817a7-85820278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13a8b5dff24c1a1a21a58edc7349191b823476c8' => 
    array (
      0 => '/home/a9729292/public_html/prestashop/themes/prestashop/order-address.tpl',
      1 => 1337766715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5543162064fbe42a00817a7-85820278',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_counter')) include '/home/a9729292/public_html/prestashop/tools/smarty/plugins/function.counter.php';
if (!is_callable('smarty_modifier_escape')) include '/home/a9729292/public_html/prestashop/tools/smarty/plugins/modifier.escape.php';
?>

<?php if ($_smarty_tpl->getVariable('opc')->value){?>
	<?php $_smarty_tpl->tpl_vars["back_order_page"] = new Smarty_variable("order-opc.php", null, null);?>
<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars["back_order_page"] = new Smarty_variable("order.php", null, null);?>
<?php }?>
<?php if (!isset($_smarty_tpl->getVariable('formatedAddressFieldsValuesList',null,true,false)->value)){?>
	<?php if (!isset($_smarty_tpl->tpl_vars['ignoreList']) || !is_array($_smarty_tpl->tpl_vars['ignoreList']->value)) $_smarty_tpl->createLocalArrayVariable('ignoreList', null, null);
$_smarty_tpl->tpl_vars['ignoreList']->value[0] = "id_address";?>
	<?php if (!isset($_smarty_tpl->tpl_vars['ignoreList']) || !is_array($_smarty_tpl->tpl_vars['ignoreList']->value)) $_smarty_tpl->createLocalArrayVariable('ignoreList', null, null);
$_smarty_tpl->tpl_vars['ignoreList']->value[1] = "id_country";?>
	<?php if (!isset($_smarty_tpl->tpl_vars['ignoreList']) || !is_array($_smarty_tpl->tpl_vars['ignoreList']->value)) $_smarty_tpl->createLocalArrayVariable('ignoreList', null, null);
$_smarty_tpl->tpl_vars['ignoreList']->value[2] = "id_state";?>
	<?php if (!isset($_smarty_tpl->tpl_vars['ignoreList']) || !is_array($_smarty_tpl->tpl_vars['ignoreList']->value)) $_smarty_tpl->createLocalArrayVariable('ignoreList', null, null);
$_smarty_tpl->tpl_vars['ignoreList']->value[3] = "id_customer";?>
	<?php if (!isset($_smarty_tpl->tpl_vars['ignoreList']) || !is_array($_smarty_tpl->tpl_vars['ignoreList']->value)) $_smarty_tpl->createLocalArrayVariable('ignoreList', null, null);
$_smarty_tpl->tpl_vars['ignoreList']->value[4] = "id_manufacturer";?>
	<?php if (!isset($_smarty_tpl->tpl_vars['ignoreList']) || !is_array($_smarty_tpl->tpl_vars['ignoreList']->value)) $_smarty_tpl->createLocalArrayVariable('ignoreList', null, null);
$_smarty_tpl->tpl_vars['ignoreList']->value[5] = "id_supplier";?>
	<?php if (!isset($_smarty_tpl->tpl_vars['ignoreList']) || !is_array($_smarty_tpl->tpl_vars['ignoreList']->value)) $_smarty_tpl->createLocalArrayVariable('ignoreList', null, null);
$_smarty_tpl->tpl_vars['ignoreList']->value[6] = "date_add";?>
	<?php if (!isset($_smarty_tpl->tpl_vars['ignoreList']) || !is_array($_smarty_tpl->tpl_vars['ignoreList']->value)) $_smarty_tpl->createLocalArrayVariable('ignoreList', null, null);
$_smarty_tpl->tpl_vars['ignoreList']->value[7] = "date_upd";?>
	<?php if (!isset($_smarty_tpl->tpl_vars['ignoreList']) || !is_array($_smarty_tpl->tpl_vars['ignoreList']->value)) $_smarty_tpl->createLocalArrayVariable('ignoreList', null, null);
$_smarty_tpl->tpl_vars['ignoreList']->value[8] = "active";?>
	<?php if (!isset($_smarty_tpl->tpl_vars['ignoreList']) || !is_array($_smarty_tpl->tpl_vars['ignoreList']->value)) $_smarty_tpl->createLocalArrayVariable('ignoreList', null, null);
$_smarty_tpl->tpl_vars['ignoreList']->value[9] = "deleted";?>	
	
	<?php if (isset($_smarty_tpl->getVariable('addresses',null,true,false)->value)){?>
		<?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('addresses')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['address']->key;
?>
			<?php echo smarty_function_counter(array('start'=>0,'skip'=>1,'assign'=>'address_key_number'),$_smarty_tpl);?>

			<?php $_smarty_tpl->tpl_vars['id_address'] = new Smarty_variable($_smarty_tpl->tpl_vars['address']->value['id_address'], null, null);?>
			<?php  $_smarty_tpl->tpl_vars['address_content'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['address_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['address']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['address_content']->key => $_smarty_tpl->tpl_vars['address_content']->value){
 $_smarty_tpl->tpl_vars['address_key']->value = $_smarty_tpl->tpl_vars['address_content']->key;
?>
				<?php if (!in_array($_smarty_tpl->tpl_vars['address_key']->value,$_smarty_tpl->getVariable('ignoreList')->value)){?>
					<?php if (!isset($_smarty_tpl->tpl_vars['formatedAddressFieldsValuesList']) || !is_array($_smarty_tpl->tpl_vars['formatedAddressFieldsValuesList']->value)) $_smarty_tpl->createLocalArrayVariable('formatedAddressFieldsValuesList', null, null);
$_smarty_tpl->tpl_vars['formatedAddressFieldsValuesList']->value[$_smarty_tpl->getVariable('id_address')->value]['ordered_fields'][$_smarty_tpl->getVariable('address_key_number')->value] = $_smarty_tpl->tpl_vars['address_key']->value;?>
					<?php if (!isset($_smarty_tpl->tpl_vars['formatedAddressFieldsValuesList']) || !is_array($_smarty_tpl->tpl_vars['formatedAddressFieldsValuesList']->value)) $_smarty_tpl->createLocalArrayVariable('formatedAddressFieldsValuesList', null, null);
$_smarty_tpl->tpl_vars['formatedAddressFieldsValuesList']->value[$_smarty_tpl->getVariable('id_address')->value]['formated_fields_values'][$_smarty_tpl->getVariable('address_key')->value] = $_smarty_tpl->tpl_vars['address_content']->value;?>
					<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

				<?php }?>
			<?php }} ?>
		<?php }} ?>
	<?php }?>
<?php }?>

<script type="text/javascript">
// <![CDATA[
	<?php if (!$_smarty_tpl->getVariable('opc')->value){?>
	var orderProcess = 'order';
	var currencySign = '<?php echo html_entity_decode($_smarty_tpl->getVariable('currencySign')->value,2,"UTF-8");?>
';
	var currencyRate = '<?php echo floatval($_smarty_tpl->getVariable('currencyRate')->value);?>
';
	var currencyFormat = '<?php echo intval($_smarty_tpl->getVariable('currencyFormat')->value);?>
';
	var currencyBlank = '<?php echo intval($_smarty_tpl->getVariable('currencyBlank')->value);?>
';
	var txtProduct = "<?php echo smartyTranslate(array('s'=>'product'),$_smarty_tpl);?>
";
	var txtProducts = "<?php echo smartyTranslate(array('s'=>'products'),$_smarty_tpl);?>
";
	<?php }?>

	var formatedAddressFieldsValuesList = new Array();

	<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['id_address'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('formatedAddressFieldsValuesList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
 $_smarty_tpl->tpl_vars['id_address']->value = $_smarty_tpl->tpl_vars['type']->key;
?>
		formatedAddressFieldsValuesList[<?php echo $_smarty_tpl->tpl_vars['id_address']->value;?>
] =
		{
			'ordered_fields':[
				<?php  $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['num_field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type']->value['ordered_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['field_name']->index=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->key => $_smarty_tpl->tpl_vars['field_name']->value){
 $_smarty_tpl->tpl_vars['num_field']->value = $_smarty_tpl->tpl_vars['field_name']->key;
 $_smarty_tpl->tpl_vars['field_name']->index++;
 $_smarty_tpl->tpl_vars['field_name']->first = $_smarty_tpl->tpl_vars['field_name']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['inv_loop']['first'] = $_smarty_tpl->tpl_vars['field_name']->first;
?>
					<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['inv_loop']['first']){?>,<?php }?>"<?php echo $_smarty_tpl->tpl_vars['field_name']->value;?>
"
				<?php }} ?>
			],
			'formated_fields_values':{
					<?php  $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['pattern_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type']->value['formated_fields_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['field_name']->index=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->key => $_smarty_tpl->tpl_vars['field_name']->value){
 $_smarty_tpl->tpl_vars['pattern_name']->value = $_smarty_tpl->tpl_vars['field_name']->key;
 $_smarty_tpl->tpl_vars['field_name']->index++;
 $_smarty_tpl->tpl_vars['field_name']->first = $_smarty_tpl->tpl_vars['field_name']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['inv_loop']['first'] = $_smarty_tpl->tpl_vars['field_name']->first;
?>
						<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['inv_loop']['first']){?>,<?php }?>"<?php echo $_smarty_tpl->tpl_vars['pattern_name']->value;?>
":"<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field_name']->value,'htmlall','UTF-8');?>
"
					<?php }} ?>
				}
		}
	<?php }} ?>

	function getAddressesTitles()
	{
		return {
						'invoice': "<?php echo smartyTranslate(array('s'=>'Your billing address'),$_smarty_tpl);?>
",
						'delivery': "<?php echo smartyTranslate(array('s'=>'Your delivery address'),$_smarty_tpl);?>
"
			};

	}


	function buildAddressBlock(id_address, address_type, dest_comp)
	{
		var adr_titles_vals = getAddressesTitles();
		var li_content = formatedAddressFieldsValuesList[id_address]['formated_fields_values'];
		var ordered_fields_name = ['title'];

		ordered_fields_name = ordered_fields_name.concat(formatedAddressFieldsValuesList[id_address]['ordered_fields']);
		ordered_fields_name = ordered_fields_name.concat(['update']);
		
		dest_comp.html('');

		li_content['title'] = adr_titles_vals[address_type];
		li_content['update'] = '<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('address.php',true);?>
?id_address='+id_address+'&amp;back=<?php echo $_smarty_tpl->getVariable('back_order_page')->value;?>
?step=1<?php if ($_smarty_tpl->getVariable('back')->value){?>&mod=<?php echo $_smarty_tpl->getVariable('back')->value;?>
<?php }?>" title="<?php echo smartyTranslate(array('s'=>'Update'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Update'),$_smarty_tpl);?>
</a>';

		appendAddressList(dest_comp, li_content, ordered_fields_name);
	}

	function appendAddressList(dest_comp, values, fields_name)
	{
		for (var item in fields_name)
		{
			var name = fields_name[item];
			var value = getFieldValue(name, values);
			if (value != "")
			{
				var new_li = document.createElement('li');
				new_li.className = 'address_'+ name;
				new_li.innerHTML = getFieldValue(name, values);
				dest_comp.append(new_li);
			}
		}
	}

	function getFieldValue(field_name, values)
	{
		var reg=new RegExp("[ ]+", "g");

		var items = field_name.split(reg);
		var vals = new Array();

		for (var field_item in items)
			vals.push(values[items[field_item]]);
		return vals.join(" ");
	}

//]]>
</script>

<?php if (!$_smarty_tpl->getVariable('opc')->value){?>
<?php ob_start(); ?><?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>
<?php  Smarty::$_smarty_vars['capture']['path']=ob_get_clean();?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./breadcrumb.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }?>

<?php if (!$_smarty_tpl->getVariable('opc')->value){?><h1><?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>
</h1><?php }else{ ?><h2>1. <?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>
</h2><?php }?>

<?php if (!$_smarty_tpl->getVariable('opc')->value){?>
<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('address', null, null);?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./order-steps.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./errors.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<form action="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink($_smarty_tpl->getVariable('back_order_page')->value,true);?>
" method="post">
<?php }else{ ?>
<div id="opc_account" class="opc-main-block">
	<div id="opc_account-overlay" class="opc-overlay" style="display:none;"></div>
<?php }?>
	<div class="addresses">
		<p class="address_delivery select">
			<label for="id_address_delivery"><?php echo smartyTranslate(array('s'=>'Choose a delivery address:'),$_smarty_tpl);?>
</label>
			<select name="id_address_delivery" id="id_address_delivery" class="address_select" onchange="updateAddressesDisplay();<?php if ($_smarty_tpl->getVariable('opc')->value){?>updateAddressSelection();<?php }?>">

			<?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('addresses')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['address']->key;
?>
				<option value="<?php echo intval($_smarty_tpl->tpl_vars['address']->value['id_address']);?>
" <?php if ($_smarty_tpl->tpl_vars['address']->value['id_address']==$_smarty_tpl->getVariable('cart')->value->id_address_delivery){?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address']->value['alias'],'htmlall','UTF-8');?>
</option>
			<?php }} ?>
			
			</select>
		</p>
		<p class="checkbox" <?php if ($_smarty_tpl->getVariable('cart')->value->isVirtualCart()){?>style="display:none;"<?php }?>>
			<input type="checkbox" name="same" id="addressesAreEquals" value="1" onclick="updateAddressesDisplay();<?php if ($_smarty_tpl->getVariable('opc')->value){?>updateAddressSelection();<?php }?>" <?php if ($_smarty_tpl->getVariable('cart')->value->id_address_invoice==$_smarty_tpl->getVariable('cart')->value->id_address_delivery||count($_smarty_tpl->getVariable('addresses')->value)==1){?>checked="checked"<?php }?> />
			<label for="addressesAreEquals"><?php echo smartyTranslate(array('s'=>'Use the same address for billing.'),$_smarty_tpl);?>
</label>
		</p>
		
		<p id="address_invoice_form" class="select" <?php if ($_smarty_tpl->getVariable('cart')->value->id_address_invoice==$_smarty_tpl->getVariable('cart')->value->id_address_delivery){?>style="display: none;"<?php }?>>
		
		<?php if (count($_smarty_tpl->getVariable('addresses')->value)>1){?>
			<label for="id_address_invoice" class="strong"><?php echo smartyTranslate(array('s'=>'Choose a billing address:'),$_smarty_tpl);?>
</label>
			<select name="id_address_invoice" id="id_address_invoice" class="address_select" onchange="updateAddressesDisplay();<?php if ($_smarty_tpl->getVariable('opc')->value){?>updateAddressSelection();<?php }?>">
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['address']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('addresses')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'] = ((int)-1) == 0 ? 1 : (int)-1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['name'] = 'address';
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['total']);
?>
				<option value="<?php echo intval($_smarty_tpl->getVariable('addresses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['address']['index']]['id_address']);?>
" <?php if ($_smarty_tpl->getVariable('addresses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['address']['index']]['id_address']==$_smarty_tpl->getVariable('cart')->value->id_address_invoice&&$_smarty_tpl->getVariable('cart')->value->id_address_delivery!=$_smarty_tpl->getVariable('cart')->value->id_address_invoice){?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('addresses')->value[$_smarty_tpl->getVariable('smarty')->value['section']['address']['index']]['alias'],'htmlall','UTF-8');?>
</option>
			<?php endfor; endif; ?>
			</select>
			<?php }else{ ?>
				<a style="margin-left: 221px;" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('address.php',true);?>
?back=<?php echo $_smarty_tpl->getVariable('back_order_page')->value;?>
?step=1&select_address=1<?php if ($_smarty_tpl->getVariable('back')->value){?>&mod=<?php echo $_smarty_tpl->getVariable('back')->value;?>
<?php }?>" title="<?php echo smartyTranslate(array('s'=>'Add'),$_smarty_tpl);?>
" class="button_large"><?php echo smartyTranslate(array('s'=>'Add a new address'),$_smarty_tpl);?>
</a>
			<?php }?>
		</p>
		<div class="clear"></div>
		<ul class="address item" id="address_delivery" <?php if ($_smarty_tpl->getVariable('cart')->value->isVirtualCart()){?>style="display:none;"<?php }?>>
		</ul>
		<ul class="address alternate_item <?php if ($_smarty_tpl->getVariable('cart')->value->isVirtualCart()){?>full_width<?php }?>" id="address_invoice">
		</ul>
		<br class="clear" />
		<p class="address_add submit">
			<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('address.php',true);?>
?back=<?php echo $_smarty_tpl->getVariable('back_order_page')->value;?>
?step=1<?php if ($_smarty_tpl->getVariable('back')->value){?>&mod=<?php echo $_smarty_tpl->getVariable('back')->value;?>
<?php }?>" title="<?php echo smartyTranslate(array('s'=>'Add'),$_smarty_tpl);?>
" class="button_large"><?php echo smartyTranslate(array('s'=>'Add a new address'),$_smarty_tpl);?>
</a>
		</p>
		<?php if (!$_smarty_tpl->getVariable('opc')->value){?>
		<div id="ordermsg">
			<p><?php echo smartyTranslate(array('s'=>'If you would like to add a comment about your order, please write it below.'),$_smarty_tpl);?>
</p>
			<p class="textarea"><textarea cols="60" rows="3" name="message"><?php if (isset($_smarty_tpl->getVariable('oldMessage',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('oldMessage')->value;?>
<?php }?></textarea></p>
		</div>
		<?php }?>
	</div>
<?php if (!$_smarty_tpl->getVariable('opc')->value){?>
	<p class="cart_navigation submit">
		<input type="hidden" class="hidden" name="step" value="2" />
		<input type="hidden" name="back" value="<?php echo $_smarty_tpl->getVariable('back')->value;?>
" />
		<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink($_smarty_tpl->getVariable('back_order_page')->value,true);?>
?step=0<?php if ($_smarty_tpl->getVariable('back')->value){?>&back=<?php echo $_smarty_tpl->getVariable('back')->value;?>
<?php }?>" title="<?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>
" class="button">&laquo; <?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>
</a>
		<input type="submit" name="processAddress" value="<?php echo smartyTranslate(array('s'=>'Next'),$_smarty_tpl);?>
 &raquo;" class="exclusive" />
	</p>
</form>
<?php }else{ ?>
</div>
<?php }?>