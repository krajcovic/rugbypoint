<?php /*%%SmartyHeaderCode:2035447324fbcbcd92b88b6-86699926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '433b6708c3c0c1e03b6b9243260633eef2285439' => 
    array (
      0 => '/home/a9729292/public_html/prestashop/modules/blockcategories/blockcategories.tpl',
      1 => 1337766448,
      2 => 'file',
    ),
    '2a5ae81ebcab748154845e6e0e19edabfd55518f' => 
    array (
      0 => '/home/a9729292/public_html/prestashop/modules/blockcategories/category-tree-branch.tpl',
      1 => 1337766451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2035447324fbcbcd92b88b6-86699926',
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
	<a href="http://www.prestashoptest.comuf.com/prestashop/category.php?id_category=5"  title="">Kopačky</a>
	</li>
												
<li >
	<a href="http://www.prestashoptest.comuf.com/prestashop/category.php?id_category=6" class="selected" title="">Chrániče</a>
	</li>
												
<li >
	<a href="http://www.prestashoptest.comuf.com/prestashop/category.php?id_category=7"  title="">Doplňkové zboží</a>
	</li>
												
<li >
	<a href="http://www.prestashoptest.comuf.com/prestashop/category.php?id_category=8"  title="">Klubové vybavení</a>
	</li>
												
<li class="last">
	<a href="http://www.prestashoptest.comuf.com/prestashop/category.php?id_category=9"  title="">Funkční prádlo</a>
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