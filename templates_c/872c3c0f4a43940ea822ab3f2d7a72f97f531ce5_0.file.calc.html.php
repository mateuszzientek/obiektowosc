<?php
/* Smarty version 3.1.30, created on 2022-03-22 02:53:43
  from "E:\xampp\htdocs\obiektowosc\app\calc.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62392c276e2313_46331141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '872c3c0f4a43940ea822ab3f2d7a72f97f531ce5' => 
    array (
      0 => 'E:\\xampp\\htdocs\\obiektowosc\\app\\calc.html',
      1 => 1647914019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62392c276e2313_46331141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72152071862392c276e1ef1_03108760', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'content'} */
class Block_72152071862392c276e1ef1_03108760 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <section>
	<form form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
									<div class="fields">
										<div class="field half">
											<label for="kwota">Podaj kwote</label>
											<input type="text" name="kwota" id="kwota"  />
										</div>
										<div class="field half">
											<label for="lata">Podaj ilosc lat</label>
											<input type="text" name="lata" id="lata" />
										</div>
										<div class="field half">
											<label for="opr">Podaj oprocentowanie</label>
											<input type="text" name="opr" id="opr" />
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Oblicz" class="primary" /></li>
										<li><input type="reset" value="Wyczysc" /></li>
									</ul>
								</form>
                            </section>
							<section class="split">
								<section>
									<div class="contact-method">
										
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol >
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['result']->value->result)) {?>
	<h4>Wynik</h4>
	<p>
	<?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>
 zł
	</p>
<?php }?>

</div>
</section>									
</section>
<?php
}
}
/* {/block 'content'} */
}
