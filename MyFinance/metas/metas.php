<?php
  include('../style/header.php');
?>
<link rel="stylesheet" type="text/css" href="../style/css/tabela.css">

<script src="../style/js/jquery-3.3.1.min.js"></script>
  <div class="main">
  
  
  
    <div class="form-cont">

    <div class="top-buttons">
      <button class="to-signup top-active-button">
        METAS
      </button>
      <button class="to-signin">
        NOVA META
      </button>
    </div>
      
    <div class="form form-signup">
      <script src="buscametas.js"></script>

      <table aling="center" id="tmetas" class="rwd-table">
        <tr>
        <th>Eu Preciso de:</th>
        <th>Até</th>
        <th>Para</th>
        <th>Por Que</th>
        <th>Alterar</th>
        <th>Apagar</th>
        </tr>
      </table>
    </div>




    <div class="form form-signin">
      <form id="formMetas" action="#" method="POST"> 
        <label>EU PRECISO DE:</label>
        <input type="number" name="txtvalmeta" id="txtvalmeta">
        <label>ATÉ:</label>
        <input type="date" name="txtdatmeta" id="txtdatmeta"/>
        <label>PARA:</label>
        <input type="text" name="txtdescmeta" placeholder="O QUE VOCE QUER FAZER" id="descmeta" />
        <label>PORQUE?</label>
        <textarea name="txtmotivo" cols="30" rows="4"></textarea>
        <input type="submit" value="Salvar" id="btnsalvar" id="btnsalvar" class="form-btn"/>

      </form>
    </div>
  </div>
<?php
  include('../style/footer.php');
?>