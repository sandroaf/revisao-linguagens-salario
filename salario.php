<?php
   define("salariominimo",1212);
   define("btnvoltar","<br><input type='button' onclick='history.go(-1)' value='Voltar'>");
   $erro = false;

   function fNaoPreenchido($valor) {
    if ($valor == "") {
        return true;
      } else {
        return false;
      }
   }
   
   if (fNaoPreenchido($_POST["iNome"])) {
      echo "<p>Erro: Nome não informado</p>";
      $erro = true;
   }
   
   if (fNaoPreenchido($_POST["iEndereco"])) {
      echo "<p>Erro: Endereço não informado</p>";
      $erro = true;
   }

   if (!$erro) {
      printf("<strong>%s</strong> Recebe o equivalente a <strong>%1.2f salários mínimos</strong>. <br>Mora no endereço <strong>%s</strong><br>",$_POST["iNome"],($_POST["iSalario"] / salariominimo),$_POST["iEndereco"]);
   }
   echo btnvoltar;
?>