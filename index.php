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
            <hr style="border:4px solid #1ba39c">
            <div class="card">
                <div style="text-align: center; padding:5%;">
                <div>
                    <h1 class="titulo">CONVERSOR DE TEXTO</h1>
                </div>
                    <form method="post" action="" enctype="multipart/form-data">
                        <div>
                        
                        </div>

                        <div>
                        <textarea name="texto" placeholder="Digite seu texto aqui"></textarea>
                        </div>

                        <div class="bottoms">
                            <div class="btn_bottom">
                                <button class="btn" type="submit" name="maiusculo">MAIÚSCULO</button>
                                <button class="btn" type="submit" name="minusculo">minúsculo</button>
                                <button class="btn" type="submit" name="alternado">AlTeRnAdO</button>
                            </div>
                            <div class="btn_bottom">
                                <button class="btn" type="submit" name="inverter">Inverter Texto</button>
                                <button class="btn" type="submit" name="primeiraLetra">Primeira Letra Palavra</button>
                                <button class="btn" type="submit" name="primeiraPalavraFrase">Primeira palavra frase</button>
                            </div>
                        </div>
                    
                </div>
                <div class="result">
                    <?php
                        if(isset($_POST['maiusculo'])){
                            $texto = $_POST['texto'];
                            $texto = mb_strtoupper($texto);
                            echo "<p>$texto</p>";
                        }

                        if(isset($_POST['minusculo'])){
                            $texto = $_POST['texto'];
                            $texto = mb_strtolower($texto);
                            echo "<p>$texto</p>";
                        }

                        


                        if(isset($_POST['limpar'])){
                            $texto = $_POST['texto'];
                            $texto = "";
                            echo "<p>$texto</p>";
                        }

                    ?>
                </div>
                <div class="bottoms">
                        <div class="btn_bottom">
                            <button class="btn" type="submit" name="limpar">Limpar</button>
                        </div>
                </div>
                </form>
            </div>
        </section>
    </main>
    <script src="_js/function.js"></script>
</body>
</html>