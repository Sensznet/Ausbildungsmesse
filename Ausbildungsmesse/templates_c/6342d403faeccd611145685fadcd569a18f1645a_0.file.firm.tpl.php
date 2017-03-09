<?php
/* Smarty version 3.1.30, created on 2017-03-09 09:09:53
  from "C:\xampp\htdocs\Ausbildungsmesse\Ausbildungsmesse\Template\firm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c10dd1178538_38380791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6342d403faeccd611145685fadcd569a18f1645a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ausbildungsmesse\\Ausbildungsmesse\\Template\\firm.tpl',
      1 => 1489046942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/head.tpl' => 1,
    'file:Template/header.tpl' => 1,
    'file:Template/feet.tpl' => 1,
  ),
),false)) {
function content_58c10dd1178538_38380791 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:Template/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <title>Betrieb</title>
    <link rel="stylesheet" href="CSS\firm.css" type="text/css">
</head>
<body>
    <div class="Header">
        <?php $_smarty_tpl->_subTemplateRender("file:Template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <div class="Body">
        <div class="Headline2">
            <h2>Firmen</h2>
        </div>
    </div>
    <div class="Feet">
        <?php $_smarty_tpl->_subTemplateRender("file:Template/feet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div> 
</body>
<?php }
}
