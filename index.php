<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de textos</title>

    <link rel="stylesheet" href="_css/style.css" type="text/css">
</head>
<body>
    <main class="container">
        <section class="box">
            <div class="card">
                <div style="text-align: center; padding: 5%;">
                    <div>    
                        <h1 class="titulo">CONVERSOR DE TEXTOS</h1>
                    </div>
                    <form method="post" action="index.php">
                        <div>    
                            
                        </div>
                        <div>
                            <textarea name="texto" placeholder="Insira seu texto aqui!"></textarea>
                        </div>
                        <div class="button">
                            <div class="btn_button">
                                <button type="submit" class ="btn" name="maiusculo">MAIÚSCULO</button>
                                <button type="submit" class ="btn" name="minusculo">minúsculo</button>
                                <button type="submit" class ="btn" name="camelCase">Camel Case</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="saida">
                    <p id="texto">TESTE</p>
            </div>
        </section>
    </main>
</body>
</html>