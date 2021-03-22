<?php
/* Smarty version 3.1.39, created on 2021-03-22 23:07:14
  from 'C:\xampp\htdocs\kred\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6059151241e3c1_15474534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c4f4f5851ad941db374f70ec35ebeac7711148d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kred\\main.tpl',
      1 => 1616450653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6059151241e3c1_15474534 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
    <head>
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Kalkulator kredytowy" : $tmp);?>
</title>
    </head>

    <body>
        <header id = "header">
            <h1> <strong> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Kalkulator kredytowy" : $tmp);?>
 </strong> </h1>
        </header>

        <section id = "main" class = "wrapper">
            <div class = "container">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8992581076059151241de27_44630674', 'content');
?>

            </div>
        </section>

        <footer id = "footer">
            <div class="container">
                <h6>  Wykonał Szymon Mika </h6> 
                <ul class="copyright">
                    <li> &copy; Wszelkie prawa zastrzeżone</li> 
                </ul>
            </div>
        </footer>
    </body>
</html><?php }
/* {block 'content'} */
class Block_8992581076059151241de27_44630674 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8992581076059151241de27_44630674',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości <?php
}
}
/* {/block 'content'} */
}
