<?php
/* Smarty version 3.1.30, created on 2017-03-09 09:09:54
  from "C:\xampp\htdocs\Ausbildungsmesse\Ausbildungsmesse\Template\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c10dd29e1231_80787071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeb4835db8403740015d2b55826bffb844183305' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ausbildungsmesse\\Ausbildungsmesse\\Template\\home.tpl',
      1 => 1489046953,
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
function content_58c10dd29e1231_80787071 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
     <?php $_smarty_tpl->_subTemplateRender("file:Template/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <title>Startseite</title>
    <link rel="stylesheet" href="CSS\home.css" type="text/css">
</head>
<body>
    <div class="Header">
        <?php $_smarty_tpl->_subTemplateRender("file:Template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <div class="Body">
        <div class="Headline2">
            <h2>Home</h2>
        </div>
    </div>
    <div class="Feet">
        <?php $_smarty_tpl->_subTemplateRender("file:Template/feet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>   
</body>

<?php }
}
