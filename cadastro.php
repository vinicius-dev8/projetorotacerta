<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Veículo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Rota Certa</h1>
        <nav class="links_inicio">
            <a href="index.html">Início</a>
            <a href="veiculos.html">Veículos</a>
        </nav>
    </header>

    <section>
        <h2>Cadastro de Veículo</h2>

        <form action="validar.php" method="post" id="usuarios" target="">
            <label>Nome completo:</label><br>
            <input type="text" name="nome" required><br><br>

            <label>CPF:</label><br>
            <input type="text" name="cpf" required><br><br>

            <label>Idade:</label><br>
            <input type="number" name="idade" required><br><br>

            <label>Veículo desejado:</label><br>
            <input type="text" name="desejado" required><br><br>

            <input type="submit" value="Cadastrar">
        </form>
    </section>

    <footer>
        <p>Acesse nossas redes sociais:</p> 
        
                <br>
                <br>
                <img class="logo_redes" src="img/twitter.png">
                <img class="logo_redes" src="img/instagram.png">
                <img class="logo_redes" src="img/whatsapp.png">
                <br><br>
                <p>@rotacerta</p>
                <br>
                <p>(11) 98766-2314</p>
                <br><br>
                <p>LINKS:</p>
                <br>
                <a class="links" href="index.html">PÁGINA INICIAL</a>
                <br><br>
                <a class="links" href="veiculos.html">PÁGINA DE VEÍCULOS</a>
                <br><br><br><br>
                
                <p>&copy; 2025 Rota Certa</p>
    </footer>
</body>
</html>
