<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Autofood</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">

            <h3>Autofood - Cadastro de Cliente</h3>

            <?php include('notice.php'); ?>
            <div class="form-group">
            <form action="string.php" method="POST">
                <div class="col-lg-6 col-lg-offset-3">
                    <label>Nome:</label>
                    <input type="text" name="nome" class="form-control">
                </div>


                <!--<br>-->

                <!--                <label>Linguagens: </label>
                                <select name="linguagem[]" class="form-control" multiple="">
                                    <option value="Java">Java</option>
                                    <option value="PHP">PHP</option>
                                    <option value="Python">Python</option>
                                </select>-->
                <!--<br>-->

                <!--                <label>Sabe PHP?</label>
                
                                <br>
                
                                <label>Sim: </label>
                                <input type="radio" name="conhecimento" value="1" checked>
                
                                <label>Não: </label>
                                <input type="radio" name="conhecimento" value="0">
                
                                <br><br>
                
                                <label>Quais linguagens eu sei?</label>
                
                                <br>
                
                                <label>Java</label>
                                <input type="checkbox" name="php[]" value="java">
                
                                <br>
                
                                <label>PHP</label>
                                <input type="checkbox" name="php[]" value="php">
                
                                <br>
                
                                <label>Python</label>
                                <input type="checkbox" name="php[]" value="python">-->


             
                    <div class="col-lg-6 col-lg-offset-3">
                        <label>Rua:</label>
                        <input type="text" name="endereco[rua]" class="form-control">
                    </div>
             
                    <div class="col-lg-6 col-lg-offset-3">
                        <label>Número:</label>
                        <input type="text" name="endereco[numero]" class="form-control">
                    </div>
     
                    <div class="col-lg-6 col-lg-offset-3">
                        <label>CEP:</label>
                        <input type="text" name="endereco[cep]" class="form-control">
                    </div>
                
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            </div>
        </div>
    </body>
</html>