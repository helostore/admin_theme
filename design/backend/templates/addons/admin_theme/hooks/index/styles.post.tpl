{style src="addons/admin_theme/backend.less"}

{if $addons.admin_theme.fullwidth == 'Y'}
    {style src="addons/admin_theme/fullwidth.less"}
{/if}

{if $addons.admin_theme.theme == 'flat'}
    <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Oswald:400,700,300">
    {style src="addons/admin_theme/themes/flat/styles.less"}
    {style src="addons/admin_theme/themes/flat/styles/main.css"}
{/if}

{if $addons.admin_theme.theme == 'warmsand'}
    <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Oswald:400,700,300">
    {style src="addons/admin_theme/themes/warmsand/styles.less"}
    {style src="addons/admin_theme/themes/warmsand/warmsand.less"}
{/if}


