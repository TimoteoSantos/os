<!DOCTYPE html>

<title>Cadastro de ordens de serviço</title>

<section class='centro' tilte='ordens de serviço'>

<?php include_once 'header.php' ?>



<h5> Cadastro de ordem de seviço </h5>
<hr>

<section>


<form action="script/CadastroOrdem.php" method='POST'>

<label for="data">Data:</label>
<input  type="date" id="data" name="data" required class="form-control largura" >

<label for="prazo">Prazo:</label>
<input type="date" id="prazo" name="prazo" required class="form-control largura" >
<br>

<label for="equipamento">Equipamento:</label>
<br>



<select class="form-select" multiple aria-label="Multiple select example" name="opcoes_selecionadas[]">
  <option selected>Nenhum</option>
  <option value="1"> 10 | L3 | ESC | Computador 01</option>
  <option value="2"> 11 | L3 | ESC | Computador 02</option>
  <option value="3"> 12 | L3 | ESC | Computador 03</option>
</select>
<br>

Serviço:
<br>

<select class="form-select" multiple aria-label="Multiple select example" name="opcoes_selecionadas[]">
  <option selected>Nenhum</option>
  <option value="1"> 10 FORMATACAO</option>
  <option value="2"> 11 INSTALACAO</option>
</select>
<br>


<textarea class="form-control "  rows="15" cols="33">


</textarea>


<p>


<input type='submit'> 

</form>


</section>


<?php include_once 'footer.php'?>