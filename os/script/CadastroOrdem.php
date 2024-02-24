  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Verifica se o campo "opcoes_selecionadas[]" está definido no formulário
  if (isset($_POST['opcoes_selecionadas'])) {
    // Recupera as opções selecionadas
    $opcoes_selecionadas = $_POST['opcoes_selecionadas'];

    // Itera sobre as opções selecionadas e exibe cada uma
    foreach ($opcoes_selecionadas as $opcao) {
      echo "Opção selecionada: " . $opcao . "<br>";
    }
  } else {
    echo "Nenhuma opção selecionada";
  }
}
?>
