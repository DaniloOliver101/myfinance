<!DOCTYPE html>
<html lang="en" >

<head>
  <script type="text/javascript"></script>
  
  <meta charset="UTF-8">
  <title>Login/Signup Form With Slider</title>
<!-- 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  

<!--   
  <link rel='stylesheet prefetch' href='http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'> -->
  <link rel="stylesheet" type="text/css" href="../style/css/slick.css">

      <link rel="stylesheet" href="../style/css/style.css">

  
</head>

<body>

  <div class="main-box">
  <div class="slider-cont">
    <div class="signup-slider">
      <div class="img-txt">
        <div class="img-layer"></div>
        <h1>O primeiro obstáculo começa em nós mesmos.</h1>
        <img src="https://static.pexels.com/photos/33972/pexels-photo.jpg"/>
      </div>
      <div class="img-txt">
        <div class="img-layer"></div>
        <h1>Nós entendemos você e suas finanças, temos a solução certa para você.</h1>
        <img src="https://static.pexels.com/photos/257897/pexels-photo-257897.jpeg"/>
      </div>
      <div class="img-txt">
        <div class="img-layer"></div>
        <h1>Junte-se a nós agora!</h1>
        <img src="https://static.pexels.com/photos/317383/pexels-photo-317383.jpeg"/>
      </div>
    </div>
  </div>
  
  
  <div class="form-cont">

    <div class="top-buttons">
      <button class="to-signup top-active-button">
        Cadastre-se
      </button>
      <button class="to-signin">
        Login
      </button>
    </div>
    
    <div class="form form-signup">
      <form action="Clientes.php" method="POST">
        <label for="txtnome">NOME COMPLETO</label>
        <input type="text" 
               placeholder="Digite seu nome" id="txtnome" name="txtnome"
               required="" />

        <label>DATA DE NASCIMENTO</label>
        <input type="date" id="datepicker" name="txtdatnasc"  
               required=""  />
        
        <label>GÊNERO</label>
        <select id="txtgenero" name="txtgenero" onchange="validargenero()">
          <option value="">SELECIONE</option>
          <option value="01">MASCULINO</option>
          <option value="02">FEMININO</option>
        
        </select>
        <label>UF</label>
        <select id="txtcoduf" name="txtcoduf">
        </select>
        <label>E-MAIL</label>
        <input type="email" 
               placeholder="Digite seu melhor e-mail"
               required="" id="txtemail" name="txtemail">
        <label>SENHA</label>
        <input type="password" 
               placeholder="Digite sua senha"
               required="" id="txtsenha" name="txtsenha"
                />

        <label>CONFIRME A SENHA</label>
        <label style="display:none" id="erro">Erro!</label>
        <input type="password" 
               placeholder="Confirme a senha"
               required="" id="txtsenha2" name="txtsenha2"
               onblur="validarsenha()" 
               />
        <p class="terms">
          <input type="checkbox" required="">
          Li e aceito os  
          <a href="#" class="lined-link">termos de serviço</a>
        </p>
        <input type="submit"
               class="form-btn"
               value="Sign Up"/>
        <a href="#" class="lined-link to-signin-link">Ja sou cadastrado</a>
      </form>
    </div>

     <div class="form form-signin">
      <form action="../server/autentica.php" method="POST" id="login">
        
          <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
          <script type="text/javascript">
            $("#login").submit(function(event){
            event.preventDefault();
            var post_url=  $(this).attr("action");
            var request_method = $(this).attr("method");
            var form_data = $(this).serialize();

            $.post(post_url, form_data, function(response){
                if(response=="1"){
                window.location="../home2/home.php"
                
                }
              else{
                $("#senha").val("");
                $("#resultado").show();
                }

              })
          });
          </script>
      

        <lable>E-MAIL</lable>
        <input type="email" 
               placeholder="Your e-mail" name="email">
        <lable>PASSWORD</lable>
        <input type="password" 
               placeholder="Your password" name="senha" id="senha">
        <input type="submit"
               class="form-btn"
               value="Sign In"/>
               <div  role="alert">
        <a href="#" class="lined-link to-signup-link">Create new account</a>
      </form>
      <div id="resultado" style="display:none" clases="alert-danger">Dados errados</div> 
    </div>

  </div>


  <div class="clear-fix"></div>
</div>
<script src="jquery.js"></script>
<script src="../style/js/jquery-3.3.1.min.js"></script>

  <script src="js/slick.min.js" ></script>
<!-- <script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script> -->
  

    <script  src="../style/js/style.js"></script>
    <script src="consultauf.js"></script>
    <script src="password.js"></script>
    <script type="text/javascript">
     
    </script>
    




</body>

</html>
