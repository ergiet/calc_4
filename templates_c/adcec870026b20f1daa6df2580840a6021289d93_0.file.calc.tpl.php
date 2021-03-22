<?php
/* Smarty version 3.1.39, created on 2021-03-22 23:07:32
  from 'C:\xampp\htdocs\kred\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60591524118c12_63875768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adcec870026b20f1daa6df2580840a6021289d93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kred\\calc.tpl',
      1 => 1616450846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60591524118c12_63875768 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213864559560591524116b80_69364721', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_213864559560591524116b80_69364721 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_213864559560591524116b80_69364721',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


		<table>
				<tr>
					<th>Jesteś zalogowany jako: <?php echo '<?php ';?>
echo "$role"<?php echo '?>';?>
</th>
					<td><a href="logout.php"><button>Wyloguj</button></a></td>
				</tr>
		<form action="calc_proc.php" method="post">
				<tr>
					<th>Kwota (złotych)</th>
					<td><input id="id_kwota" type="text" name="kwota"/></td>
				</tr>
				<tr>
					<th>Okres (lata)</th>
					<td><input id="id_okres" type="text" name="okres"/></td>
				</tr>
				<tr>
					<th>Oprocentowanie (procent)</th>
					<td><input id="id_oproc" type="text" name="oproc"/></td>
				</tr>
				<tr>
					<th>Oblicz</th>
					<td><input type="submit" value="Klik" /></td>
				</tr>
		</table>
		</form>

<?php
}
}
/* {/block 'content'} */
}
