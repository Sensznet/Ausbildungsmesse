<head>
    {include file="Template/head.tpl"}
    <title>Admin-Login</title>
    <link rel="stylesheet" href="CSS\login.css" type="text/css">
</head>
<body>
    <div class="Header">
        {include file="Template/header.tpl"}
    </div>
    
    <div class="Body">
        <div class="Headline2">
          <h2>Login</h2>
        </div>
        <form action="?view=panel&method=login" method="POST" class="Login">
            <label for="betriebsID">Betriebs-ID:
                <input id="betriebsID" name="betriebsID" value="{if isset($smarty.post.betriebsID)}{$smarty.post.betriebsID}{/if}">
            </label>
            <button type="submit">Login</button>
        </form>
        <a href="?view=adminpanel">Admin Login</a>
    </div>
    <div class="Feet">
        {include file="Template/feet.tpl"}
    </div>     
</body>