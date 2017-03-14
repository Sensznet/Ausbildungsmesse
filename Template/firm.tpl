<head>
    {include file="Template/head.tpl"}
    <title>Betrieb</title>
    <link rel="stylesheet" href="CSS\firm.css" type="text/css">
</head>
<body>
    <div class="Header">
        {include file="Template/header.tpl"}
    </div>
    <div class="Body">
        <div class="Headline2">
            <h2>Firmen</h2>
        </div>
        <div>
            <table class="Companys">
                <tr>
                    <th>
                        Betrieb
                    </th>
                    <th>
                        Straße
                    </th>
                    <th>
                        Ort
                    </th>
                    <th>
                        PLZ
                    </th>
                    <th>
                        Homepage
                    </th>
                    <th>
                        Info
                    </th>
                    <th>
                        Vorname
                    </th>
                    <th>
                        Nachname
                    </th>
                    <th>
                        E-Mail
                    </th>
                    <th>
                        Telefon
                    </th>
                    <th>
                        Fax
                    </th>
                </tr>
                {foreach from=$betriebe item=betrieb}
                    {if !is_null($betrieb->getTeilnahme()) && $betrieb->getTeilnahme()->getTeilnahme()}
                        <tr>
                            <td>
                                {$betrieb->getName()}
                            </td>
                            <td>
                                {$betrieb->getStraße()}
                            </td>
                            <td>
                                {$betrieb->getOrt()}
                            </td>
                            <td>
                                {$betrieb->getPlz()}
                            </td>
                            <td>
                                <a href="{$betrieb->getHomepage()}" target="_blank">
                                    {$betrieb->getHomepage()}
                                </a>
                            </td>
                            <td>
                                {$betrieb->getTeilnahme()->getInfo()}
                            </td>
                            <td>
                                {$betrieb->getAnsprechpartner()->getVorname()}
                            </td>
                            <td>
                                {$betrieb->getAnsprechpartner()->getName()}
                            </td>
                            <td>
                                {$betrieb->getAnsprechpartner()->getEmail()}
                            </td>
                            <td>
                                {$betrieb->getAnsprechpartner()->getTelefon()}
                            </td>
                            <td>
                                {$betrieb->getAnsprechpartner()->getFax()}
                            </td>
                        </tr>
                    {/if}
                {/foreach}
            </table>
        </div>
    </div>
    <div class="Feet">
        {include file="Template/feet.tpl"}
    </div> 
</body>
