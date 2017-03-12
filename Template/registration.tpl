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
                            <th colspan="2">
                                <h3>Account</h3>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="username">Benutzername: </label>
                            </th>
                            <th>
                                <input type="text" id="username" name="username" placeholder="User" required>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="number">Nr: </label>
                            </th>
                            <th>
                                <input type="number" id="number" name="number" value="{$betrieb->getnr()}" placeholder="ID" required>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="password1">Passwort: </label>
                            </th>
                            <th>
                                <input type="password" id="password1" name="password1" required>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="password2">Passwort wiederholen: </label>
                            </th>
                            <th>
                                <input type="password" id="password2" name="password2" required>
                            </th>
                        </tr>*}
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
                                <input type="text" id="name" name="name" value="{$betrieb->getName()}" placeholder="Firma" required>
                                {if isset($error["name"])}
                                    {$error["name"]}
                                    {/if}
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="location">Ort: </label>
                            </th>
                            <th>
                                <input type="text"id="location" name="location" value="{$betrieb->getOrt()}" placeholder="Stadt" required>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="plz">Postleitzahl: </label>
                            </th>
                            <th>
                                <input type="text"id="plz" name="plz" value="{$betrieb->getPlz()}" placeholder="00000" required>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="street">Straße: </label>
                            </th>
                            <th>
                                <input type="text"id="street" name="street" value="{$betrieb->getStraße()}" placeholder="Straße" required>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="hp">Homepage: </label>
                            </th>
                            <th>
                                <input type="url" id="hp" name="hp" placeholder="www.Firma.de" value="{$betrieb->getHomepage()}" required>
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
                                <input type="text" id="partnersurname" name="partnersurname" value="{if !is_null($betrieb->getAnsprechpartner())}{$betrieb->getAnsprechpartner()->getVorname()}{/if}" placeholder="Max" required>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="partnername">Nachname: </label>
                            </th>
                            <th>
                                <input type="text" id="partnername" name="partnername" value="{if !is_null($betrieb->getAnsprechpartner())}{$betrieb->getAnsprechpartner()->getName()}{/if}" placeholder="Mustermann" required>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="partnertel">Telefon: </label>
                            </th>
                            <th>
                                <input type="tel" id="partnertel" name="partnertel" value="{if !is_null($betrieb->getAnsprechpartner())}{$betrieb->getAnsprechpartner()->getTelefon()}{/if}" placeholder="0123/456789" required>
                                {if isset($error["partnertel"])}
                                    {$error["partnertel"]}
                                {/if}
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="partnerfax">Fax: </label>
                            </th>
                            <th>
                                <input type="tel" id="partnerfax" name="partnerfax" value="{if !is_null($betrieb->getAnsprechpartner())}{$betrieb->getAnsprechpartner()->getFax()}{/if}" placeholder="0123/456789">
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="partneremail">E-Mailadresse: </label>
                            </th>
                            <th>
                                <input type="email" id="partneremail" name="partneremail" value="{if !is_null($betrieb->getAnsprechpartner())}{$betrieb->getAnsprechpartner()->getEmail()}{/if}" placeholder="max@mustermann.de" required>
                                {if isset($error["partneremail"])}
                                    {$error["partneremail"]}
                                {/if}
                            </th>
                        </tr>
                        <tr>
                            <th colspan="2">
                                <br></br>
                                <h3>Teilnahme</h3>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="teilnahme">Teilnahme: </label>
                            </th>
                            <th>
                                <select type="text" name="teilnahme" required>
                                    <option hidden></option>
                                    <option value="1" {if !is_null($betrieb->getTeilnahme()) && $betrieb->getTeilnahme()->getTeilnahme()}selected{/if}>Ja</option>
                                    <option value="0" {if !is_null($betrieb->getTeilnahme()) && !$betrieb->getTeilnahme()->getTeilnahme()}selected{/if}>Nein</option>
                                </select>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="flaeche">Benötigte Fläche: </label>
                            </th>
                            <th>
                                <input type="number" name="flaeche" step="0.1" placeholder="m²" value="{if !is_null($betrieb->getTeilnahme())}{$betrieb->getTeilnahme()->getFlaeche()}{/if}" required>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="strom">Strom: </label>
                            </th>
                            <th>
                                <select type="text" name="strom" required>
                                    <option hidden></option>
                                    <option value="1" {if !is_null($betrieb->getTeilnahme()) && $betrieb->getTeilnahme()->getStrom()}selected{/if}>Ja</option>
                                    <option value=0" {if !is_null($betrieb->getTeilnahme()) && !$betrieb->getTeilnahme()->getStrom()}selected{/if}>Nein</option>
                                </select>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="bemerkung">Bemerkung/Wünsche: </label>
                            </th>
                            <th>
                                <textarea name="bemerkung">{if !is_null($betrieb->getTeilnahme())}{$betrieb->getTeilnahme()->getBemerkung()}{/if}</textarea>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="info">Info Text: </label>
                            </th>
                            <th>
                                <textarea name="info">{if !is_null($betrieb->getTeilnahme())}{$betrieb->getTeilnahme()->getInfo()}{/if}</textarea>
                            </th>
                        </tr>
                        <tr height="200">
                            <th colspan="2">
                                <button type="submit" class="button">
                                    <p>Registrieren</p>
                                </button>
                            </th>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    <div class="Feet">
    {include file="Template/feet.tpl"}
    </div>
</body>
