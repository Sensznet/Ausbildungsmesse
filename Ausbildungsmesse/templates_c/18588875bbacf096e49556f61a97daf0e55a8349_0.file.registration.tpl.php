<?php
/* Smarty version 3.1.30, created on 2017-03-08 11:52:41
  from "C:\xampp\htdocs\Ausbildungsmesse\Template\registration.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bfe279b6ac38_93045188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18588875bbacf096e49556f61a97daf0e55a8349' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ausbildungsmesse\\Template\\registration.tpl',
      1 => 1488970357,
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
function content_58bfe279b6ac38_93045188 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:Template/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <title>Registrierung</title>
    <link rel="stylesheet" href="CSS\registration.css" type="text/css">
    <link rel="stylesheet" href="CSS\formulars.css" type="text/css">
</head>
<body>
    <div id="Header">
        <?php $_smarty_tpl->_subTemplateRender("file:Template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <h1>Ausbildungsmesse</h1>
    </div>
    <div id="Body">
        <div id="Registration">
            <h2>Registrierung</h2>
                <form action="/ausbildungsmesse/index.php?method=registration" method="POST">
                    <div id="Formular">
                        <table>
                            
                            <tr>
                                <th colspan="2">
                                    <br></br>
                                    <h3>Firma</h3>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label for="name">Name: </label>
                                </th>
                                <th>
                                    <input type="text" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['betrieb']->value->getName();?>
" placeholder="Firma" required>
                                    <?php if (isset($_smarty_tpl->tpl_vars['error']->value["name"])) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['error']->value["name"];?>

                                        <?php }?>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label for="location">Ort: </label>
                                </th>
                                <th>
                                    <input type="text"id="location" name="location" value="<?php echo $_smarty_tpl->tpl_vars['betrieb']->value->getOrt();?>
" placeholder="Stadt" required>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label for="street">Stra&szlige: </label>
                                </th>
                                <th>
                                    <input type="text"id="street" name="street" value="<?php echo $_smarty_tpl->tpl_vars['betrieb']->value->getStraße();?>
" placeholder="Straße" required>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label for="hp">Homepage: </label>
                                </th>
                                <th>
                                    <input type="url" id="hp" name="hp" placeholder="www.Firma.de" value="<?php echo $_smarty_tpl->tpl_vars['betrieb']->value->getHomepage();?>
" required>
                                </th>
                            </tr>
                            <tr>
                                <th colspan="2">
                                    <br></br>
                                    <h3>Ansprechpartner</h3>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label for="partnersurname">Vorame: </label>
                                </th>
                                <th>
                                    <input type="text" id="partnersurname" name="partnersurname" placeholder="Max" required>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label for="partnername">Nachname: </label>
                                </th>
                                <th>
                                    <input type="text" id="partnername" name="partnername" placeholder="Mustermann" required>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label for="partnertel">Telefon: </label>
                                </th>
                                <th>
                                    <input type="tel" id="partnertel" name="partnertel" placeholder="0123/456789" required>
                                    <?php if (isset($_smarty_tpl->tpl_vars['error']->value["partnertel"])) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['error']->value["partnertel"];?>

                                        <?php }?>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label for="partnerfax">Fax: </label>
                                </th>
                                <th>
                                    <input type="tel" id="partnerfax" name="partnerfax" placeholder="0123/456789">
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label for="partneremail">E-Mailadresse: </label>
                                </th>
                                <th>
                                    <input type="email" id="partneremail" name="partneremail" placeholder="max@mustermann.de" required>
                                    <?php if (isset($_smarty_tpl->tpl_vars['error']->value["partneremail"])) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['error']->value["partneremail"];?>

                                        <?php }?>
                                </th>
                            </tr>
                            <tr height="200">
                                <th colspan="2">
                                    <button type="submit">
                                        <p>Registrieren</p>
                                    </button>
                                </th>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    <div class="Feet">
    <?php $_smarty_tpl->_subTemplateRender("file:Template/feet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</body>
<?php }
}
