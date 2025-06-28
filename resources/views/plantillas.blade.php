<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Mi Framework Laravel1</h1>
        <nav>
            <a href="/product">Inicio</a>
        </nav>
    </header>
    
    <main>
    @yield("content")
    </main>

    <footer>
        <p>© 2025 Mi Framework</p>
    </footer>    
</body>
</html>