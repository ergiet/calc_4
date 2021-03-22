<html>
    <head>
        <title>{$page_title|default:"Kalkulator kredytowy"}</title>
    </head>

    <body>
        <header id = "header">
            <h1> <strong> {$page_title|default:"Kalkulator kredytowy"} </strong> </h1>
        </header>

        <section id = "main" class = "wrapper">
            <div class = "container">
                {block name=content} Domyślna treść zawartości {/block}
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
</html>