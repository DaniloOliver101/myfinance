<?php
  include('../style/header.php');
?>
<link rel="stylesheet" type="text/css" href="../style/css/tabela.css">
  <div class="main">

  
  
  
  <div class="form-cont">

    <div class="top-buttons">
      <button class="to-signup top-active-button">
        RESUMO
      </button>
      <button class="to-signin">
        INDICADORES
      </button>
    </div>
      
    <div class="form form-signup">
      <h1>Câmbio</h1>
    </div>
        <div class="form form-signin">
          <table id="tCambio" class="rwd-table">
            <th>Moeda</th>
            <th>Valor</th>
          </table>


          <script src="../style/js/jquery-3.3.1.min.js"></script>
          <script src="cotacoes.js"></script>

    </div>


<?php
  include('../style/footer.php');
?>