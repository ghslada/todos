
<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <script src="js/registerSelectChanges.js"></script>
        <link href="css/styles.css" rel="stylesheet" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                        <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="senha" id="inputFirstName" type="password" placeholder="Crie a senha" />
                                                        <label for="inputFirstName">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputLastName" type="password" placeholder="Confirme a senha" />
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="senha" id="inputPassword" type="password" placeholder="Crie a senha" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirme a senha" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="endereco" id="inputEndereco" type="text" placeholder="name@example.com" />
                                                <label for="inputEndereco">Address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <!-- <input class="form-control" name="cep" id="inputCEP" type="text" placeholder="96105-103" /> -->
                                                <h6>Select your country: </h6>
                                                <?php include_once("api/user/createUser.php");
                                                        echo'<select onChange="onCountryChange()" id="country" class="form-control mb-3" name="cep" id="inputCEP">
                                                        <option> ------- </option>';
                                                        generateCountryOptions(); 
                                                        echo("</select>");
                                                        //NECESSARIO FECHAR O SELECT DEPOIS DE GERAR AS OPTIONS.
                                                    ?>
                                                    
                                                
                                            </div>
                                            <div><h3 id="test">A</h3></div>

                                                <?php 

                                                        // if(isset($_POST['Country']) && $_POST['Country']>0)
                                                        // include_once("api/user/createUser.php");
                                                        
                                                        //NECESSARIO FECHAR O SELECT DEPOIS DE GERAR AS OPTIONS.
                                                    ?>
                                                    
                                            <div class="form-floating mb-3">
                                                <!-- <input class="form-control" name="cep" id="inputCEP" type="text" placeholder="96105-103" /> -->
                                                <h6> Postal code: </h6>
                                                <?php include_once("api/user/createUser.php");
                                                        echo'<select id="city" class="form-control mb-3" name="cep" id="inputCEP">';
                                                        generatePostalCodeOptions(); 
                                                        echo("</select>");
                                                        //NECESSARIO FECHAR O SELECT DEPOIS DE GERAR AS OPTIONS.
                                                    ?>
                                                    
                                                
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="telefone" id="inputTelefone" type="phone" placeholder="54 99239-4812" />
                                                <label for="inputTelefone">Phone</label>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <button class="btn btn-primary btn-block" type="submit" name="submit" class="d-grid">Create Account</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Já possui uma conta? Ir para o login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>

    </body>
</html>