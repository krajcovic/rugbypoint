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
    '26f1a86da085adefd413044047b61fa1f121dd08' => 
    array (
      0 => '/var/www/shop/rugbypoint/modules/blockcategories/category-tree-branch.tpl',
      1 => 1338058567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21088499314fc138e927e0f7-95784795',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$no_render) {?>

<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<h4>Kategorie</h4>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://localhost/shop/rugbypoint/category.php?id_category=5"  title="">Kopačky</a>
	</li>
												
<li >
	<a href="http://localhost/shop/rugbypoint/category.php?id_category=6"  title="">Chrániče</a>
	</li>
												
<li >
	<a href="http://localhost/shop/rugbypoint/category.php?id_category=7" class="selected" title="">Repliky</a>
	</li>
												
<li >
	<a href="http://localhost/shop/rugbypoint/category.php?id_category=8"  title="">Tréninkové vybavení</a>
	</li>
												
<li class="last">
	<a href="http://localhost/shop/rugbypoint/category.php?id_category=9"  title="">Funkční prádlo</a>
	</li>
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
<?php } ?>