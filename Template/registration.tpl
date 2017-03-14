<head>
    {include file="Template/head.tpl"}
    <title>Registrierung</title>
    <link rel="stylesheet" href="CSS\registration.css" type="text/css">
    <link rel="stylesheet" href="CSS\formulars.css" type="text/css">
</head>
<body>
    <div class="Header">
        {include file="Template/header.tpl"}
    </div>
    <div class="Body">
        <div class="headline2">
            <h2>Registrierung</h2>
        </div>
            <form action="?view=panel&method=registration" method="POST">
                <div class="Formular">
                    <table>
                        {*<tr>
                            <td colspan="2">
                                <h3>Account</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="username">Benutzername: </label>
                            </td>
                            <td>
                                <input type="text" id="username" name="username" placeholder="User" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="number">Nr: </label>
                            </td>
                            <td>
                                <input type="number" id="number" name="number" value="{$betrieb->getnr()}" placeholder="ID" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password1">Passwort: </label>
                            </td>
                            <td>
                                <input type="password" id="password1" name="password1" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password2">Passwort wiederholen: </label>
                            </td>
                            <td>
                                <input type="password" id="password2" name="password2" required>
                            </td>
                        </tr>*}
                        <tr>
                            <td colspan="2">
                                <br></br>
                                <h3>Firma</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="name">Name: </label>
                            </td>
                            <td>
                                <input type="text" id="name" name="name" value="{$betrieb->getName()}" placeholder="Firma" required>
                                {if isset($error["name"])}
                                    {$error["name"]}
                                    {/if}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="location">Ort: </label>
                            </td>
                            <td>
                                <input type="text"id="location" name="location" value="{$betrieb->getOrt()}" placeholder="Stadt" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="plz">Postleitzahl: </label>
                            </td>
                            <td>
                                <input type="text"id="plz" name="plz" value="{$betrieb->getPlz()}" placeholder="00000" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="street">Straße: </label>
                            </td>
                            <td>
                                <input type="text"id="street" name="street" value="{$betrieb->getStraße()}" placeholder="Straße" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="hp">Homepage: </label>
                            </td>
                            <td>
                                <input type="url" id="hp" name="hp" placeholder="www.Firma.de" value="{$betrieb->getHomepage()}" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <br></br>
                                <h3>Ansprechpartner</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="partnersurname">Vorame: </label>
                            </td>
                            <td>
                                <input type="text" id="partnersurname" name="partnersurname" value="{if !is_null($betrieb->getAnsprechpartner())}{$betrieb->getAnsprechpartner()->getVorname()}{/if}" placeholder="Max" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="partnername">Nachname: </label>
                            </td>
                            <td>
                                <input type="text" id="partnername" name="partnername" value="{if !is_null($betrieb->getAnsprechpartner())}{$betrieb->getAnsprechpartner()->getName()}{/if}" placeholder="Mustermann" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="partnertel">Telefon: </label>
                            </td>
                            <td>
                                <input type="tel" id="partnertel" name="partnertel" value="{if !is_null($betrieb->getAnsprechpartner())}{$betrieb->getAnsprechpartner()->getTelefon()}{/if}" placeholder="0123/456789" required>
                                {if isset($error["partnertel"])}
                                    {$error["partnertel"]}
                                {/if}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="partnerfax">Fax: </label>
                            </td>
                            <td>
                                <input type="tel" id="partnerfax" name="partnerfax" value="{if !is_null($betrieb->getAnsprechpartner())}{$betrieb->getAnsprechpartner()->getFax()}{/if}" placeholder="0123/456789">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="partneremail">E-Mailadresse: </label>
                            </td>
                            <td>
                                <input type="email" id="partneremail" name="partneremail" value="{if !is_null($betrieb->getAnsprechpartner())}{$betrieb->getAnsprechpartner()->getEmail()}{/if}" placeholder="max@mustermann.de" required>
                                {if isset($error["partneremail"])}
                                    {$error["partneremail"]}
                                {/if}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <br></br>
                                <h3>Teilnahme</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="teilnahme">Teilnahme: </label>
                            </td>
                            <td>
                                <select type="text" name="teilnahme" required>
                                    <option  style="display: none;"></option>
                                    <option value="1" {if !is_null($betrieb->getTeilnahme()) && $betrieb->getTeilnahme()->getTeilnahme()}selected{/if}>Ja</option>
                                    <option value="0" {if !is_null($betrieb->getTeilnahme()) && !$betrieb->getTeilnahme()->getTeilnahme()}selected{/if}>Nein</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="flaeche">Benötigte Fläche: </label>
                            </td>
                            <td>
                                <input type="number" name="flaeche" step="0.1" placeholder="m²" value="{if !is_null($betrieb->getTeilnahme())}{$betrieb->getTeilnahme()->getFlaeche()}{/if}" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="strom">Strom: </label>
                            </td>
                            <td>
                                <select type="text" name="strom" required>
                                    <option style="display: none;"></option>
                                    <option value="1" {if !is_null($betrieb->getTeilnahme()) && $betrieb->getTeilnahme()->getStrom()}selected{/if}>Ja</option>
                                    <option value="0" {if !is_null($betrieb->getTeilnahme()) && !$betrieb->getTeilnahme()->getStrom()}selected{/if}>Nein</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="raum">Eigener Raum: </label>
                            </td>
                            <td>
                                <select type="text" name="raum" required>
                                    <option style="display: none;"></option>
                                    <option value="1" {if !is_null($betrieb->getTeilnahme()) && $betrieb->getTeilnahme()->getRaum()}selected{/if}>Ja</option>
                                    <option value="0" {if !is_null($betrieb->getTeilnahme()) && !$betrieb->getTeilnahme()->getRaum()}selected{/if}>Nein</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="bemerkung">Bemerkung/Wünsche: </label>
                            </td>
                            <td>
                                <textarea name="bemerkung">{if !is_null($betrieb->getTeilnahme())}{$betrieb->getTeilnahme()->getBemerkung()}{/if}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="info">Info Text: </label>
                            </td>
                            <td>
                                <textarea name="info">{if !is_null($betrieb->getTeilnahme())}{$betrieb->getTeilnahme()->getInfo()}{/if}</textarea>
                            </td>
                        </tr>
                        <tr height="200">
                            <td colspan="2">
                                <button type="submit" class="button">
                                    <p>Registrieren</p>
                                </button>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    <div class="Feet">
    {include file="Template/feet.tpl"}
    </div>
</body>
