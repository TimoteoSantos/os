<!DOCTYPE html>

<title>Cadastro de ordens de serviço</title>

<section class='centro' tilte='ordens de serviço'>

<?php include_once 'header.php' ?>



<h5> Cadastro de ordem de seviço </h5>
<hr>

<section>


<form action="#">

<label for="data">Data:</label>
<input  type="date" id="data" name="data" required class="form-control largura" >

<label for="prazo">Prazo:</label>
<input type="date" id="prazo" name="prazo" required class="form-control largura" >
<br>

<label for="equipamento">Equipamento:</label>
<br>

<select   name = 'equipamento'  class="form-control largura-2" >

<option> 01 | COMPUTADOR ESCRITORIO L3 </option>
<option> 02 | COMPUTADOR ESCRITORIO L2 </option>

<select> 

<br>
<label for="equipamento">Serviço:</label>
<br>

<select   name = 'servico'  class="form-control largura-2" >

<option> 01 | INSTALACAO WINDOWS </option>
<option> 02 | MANUTENCAO PREVENTIVA </option>

<select> 




<br>


</form>


</section>


<?php include_once 'footer.php'?>