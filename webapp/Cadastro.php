<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>TechFix - Cadastro</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="LogoMarca/Icone.png" type="image/x-icon">
  
</head>

<body>
  <div class="tm-header" style="padding-top: 0px;bottom: 0px;top: 0px;border-bottom-width: 10px;padding-bottom: 80px;height: 85px;margin-top: 0px;">
    <div class="container" style="margin-left: 110px;">
        <div class="row">
    <div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
            <img style="position: relative; bottom: 15px;" onclick="window.open('index.php', '_self');" class="LogoMarca" src="LogoMarca/LogoMarca.png" title="Seja Bem-vindo(a) ao TechFix!"> 
          </div>
          <div class="col-lg-6 col-md-8 col-sm-9">
            <div class="mobile-menu-icon">
                  <i class="fa fa-bars"></i>
                </div>
            <nav class="tm-nav" style="width: 700px; margin-left: 500px; position: absolute; top:0px; ">
            <ul  style="margin-top: 6px;">
              <li><a href="index.php" class="active">Menu</a></li>
              <li><a href="Sobre.html">Sobre</a></li>
              <li><a href="Empresas.html">Empresas</a></li>
              <li><a href="Login.php">Login</a></li>
            </ul>
          </nav>    
          </div>        
        </div>
      </div>
    </div>

  <div class="form" style="margin-top: 100px">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Cadastro Usuário</a></li>
        <li class="tab"><a href="#login">Cadastro Empresa</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Cadastre-se</h1>
          
          <form action="cadastroservidor.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nome<span class="req">*</span>
              </label>
              <input type="text" name="username" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
             
            </div>
          </div>

          <div class="top-row">
            <div class="field-wrap">
              <label>
                USER<span class="req">*</span>
              </label>
              <input type="text" name="username" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
             
            </div>
          </div>

            <div class="field-wrap">
            <label>
              Data de Nascimento<span class="req">*</span>
            </label>
                <input type="data" name="dt_nascimento" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="text" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Senha<span class="req">*</span>
            </label>
            <input type="password" name="senha" required autocomplete="off"/>
          </div>

            <div class="field-wrap">
            <label>
              CPF<span class="req">*</span>
            </label>
            <input type="text" name="cpf" required autocomplete="off"/>
          </div>

            <div class="field-wrap">
            <label>
              RG<span class="req">*</span>
            </label>
            <input type="text" name="rg" required autocomplete="off"/>
          </div>

            <div class="field-wrap">
            <label>
              Estado<span class="req">*</span>
            </label>
            <input type="text" name="estado" required autocomplete="off"/>
          </div>

            <div class="field-wrap">
            <label>
              Cidade<span class="req">*</span>
            </label>
            <input type="text" name="cidade" required autocomplete="off"/>
          </div>
          
              <button type="submit" class="button button-block"/>Cadastre-se</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Cadastre sua empresa</h1>
          
          <form action="Cadastrocompany.php" method="post">
          
            <div class="top-row">
            <div class="field-wrap">
              <label>
                Nome<span class="req">*</span>
              </label>
              <input type="text" name = "username" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
             
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Senha<span class="req">*</span>
            </label>
            <input type="password" name="senha" required autocomplete="off"/>
          </div>

            <div class="field-wrap">
            <label>
              CNPJ<span class="req">*</span>
            </label>
            <input type="number" name="cnpj" required autocomplete="off"/>
          </div>

            <div class="field-wrap">
            <label>
              Fundadoes <span class="req">*</span>
            </label>
            <input type="text" name="fund" required autocomplete="off"/>
          </div>

           <label>
              Data de Fundação <span class="req">*</span>
            </label>
            <input type="text" name="creat" required autocomplete="off"/>
          </div>

           <label>
              Telefone <span class="req">*</span>
            </label>
            <input type="number" name="telefone" required autocomplete="off"/>
          </div>

           <label>
              Sobre <span class="req">*</span>
            </label>
            <input type="text" name="sobre" required autocomplete="off"/>
          </div>

           <label>
              Estado <span class="req">*</span>
             <select name="Estado">
                <option value="">Selecione</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espirito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MT">Mato Grosso</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>
          </div>7

             <label>
              Cidade <span class="req">*</span>
            </label>
            <input type="text" name="cidade" required autocomplete="off"/>
          </div>

           <label>
              Bairro <span class="req">*</span>
            </label>
            <input type="text" name="bairro" required autocomplete="off"/>
          </div>

           <label>
              Endereço <span class="req">*</span>
            </label>
            <input type="text" name="endereco" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Cadastre-se</button>
          
          </form>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>


</div>
</body>

</html>
