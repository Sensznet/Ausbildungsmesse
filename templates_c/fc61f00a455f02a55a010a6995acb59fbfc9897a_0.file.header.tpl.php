<?php
/* Smarty version 3.1.30, created on 2017-03-09 08:59:57
  from "C:\xampp\htdocs\Ausbildungsmesse\Ausbildungsmesse\Template\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c10b7d0cfd96_66617434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc61f00a455f02a55a010a6995acb59fbfc9897a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ausbildungsmesse\\Ausbildungsmesse\\Template\\header.tpl',
      1 => 1489046279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/menue.tpl' => 1,
  ),
),false)) {
function content_58c10b7d0cfd96_66617434 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="Logo">
    <a title="Staatliche Berufsschule Lichtenfels" href="/">
        <img class="logo-img" alt="Staatliche Berufsschule Lichtenfels" src="Images/logo-bs-lif.png"></img>
    </a>
    <div class="Headline1">
        <h1>Ausbildungsmesse</h1>
    </div>
    
    <div class="Menue">
        <?php $_smarty_tpl->_subTemplateRender("file:Template/menue.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</div>
<?php }
}
