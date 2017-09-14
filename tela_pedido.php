<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Autofood</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>

        <div class="container-fluid">

            <?php include('notice.php'); ?>
            <div class="form-group">
                <form action="string.php" method="POST">
                    <div class="col-lg-6 col-lg-offset-3">
                        <h2 class="display-4"><font color="#3A5FCD" face="Verdana"><p style="text-align: center">Autofood - Pedidos</p></font></h2>

                        <br><h4 class="display-4"><font color="#3A5FCD" face="Verdana"><p style="text-align: center">Informações do Cliente</p></font></h4>

                        <br><label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nome:</label>
                        <div class="col-sm-10">
                            <input type="text" name="nome" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Exemplo: Lucia Zucarelli Leite">
                        </div>
                        
                        <br><br><br><label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Telefone:</label>
                        <div class="col-sm-10">
                            <input type="text" phone="phone" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Exemplo: (00)0000-0000">
                        </div>

<!--                        <br><br><br><label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Data de Nascimento:</label>
                        <div class="col-sm-10">
                            <input type="text" date="date" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Exemplo: 20/01/2010">
                        </div>

                        <br><br><br><label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">E-mail:</label>
                        <div class="col-sm-10">
                            <input type="text" email="email" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Exemplo: lzucarelli@leite.com">
                        </div>

                       
                         <br><br><br><label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Sexo:</label>
                        <div class="col-sm-10">
                            <input type="text" sexo="sexo" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Exemplo: Feminino">
                        </div>-->

                    </div>
                    <div class="col-lg-6 col-lg-offset-3">
                        <br><h4 class="display-4"><font color="#3A5FCD" face="Verdana"><p style="text-align: center">Endereço do Cliente</p></font></h4>

                        <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Rua:</label>
                        <div class="col-sm-10">
                            <input type="text" name="endereco[rua]" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Exemplo: Rua do Autofood">
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-offset-3">
                        <br><label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Número:</label>
                        <div class="col-sm-10">
                            <input type="text" name="endereco[numero]" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Exemplo: 00">
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-offset-3">
                        <br><label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Bairro:</label>
                        <div class="col-sm-10">
                            <input type="text" name="endereco[numero]" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Exemplo: Bairro do Autofood">
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-offset-3">
                        <br><label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">CEP:</label>
                        <div class="col-sm-10">
                            <input type="text" name="endereco[cep]" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Exemplo: 00000-000">
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-6 col-lg-offset-3">
                        <br><h4 class="display-4"><font color="#3A5FCD" face="Verdana"><p style="text-align: center">Informações do Produto</p></font></h4>

                        <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Tipo:</label>
                        <div class="col-sm-10">
                            <input type="text" name="endereco[rua]" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Exemplo: X-Burguer">
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-offset-3">
                        <br><label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Quantidade:</label>
                        <div class="col-sm-10">
                            <input type="text" name="endereco[numero]" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Exemplo: 02">
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-offset-3">
                        <br><label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Adicional:</label>
                        <div class="col-sm-10">
                            <input type="text" name="endereco[numero]" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Exemplo: Refrigerante">
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-offset-3">
                        <br><label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Forma de Pagamento:</label>
                        <div class="col-sm-10">
                            <input type="text" name="endereco[cep]" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Exemplo: Cartão de Crédito">
                        </div>
                    </div>
                    
                    

                    <div class="col-lg-6 col-lg-offset-3">
                        <br><p style="text-align: center"><button type="submit" class="btn btn-primary">Enviar</button></p>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>