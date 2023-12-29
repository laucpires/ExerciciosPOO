function executar(e) {
  e.preventDefault();

  let titulo = document.forms["form"]["titulo"].value;
  let autor = document.forms["form"]["autor"].value;
  let acao = document.getElementsByName("acao");

  let acaoEscolhida = "";

  for (let i = 0; i < acao.length; i++) {
    if (acao[i].checked) {
      acaoEscolhida = acao[i].value;
      break;
    }
  }

  $.ajax({
    url: "./10.php",
    method: "GET",
    data: {
      titulo: titulo,
      autor: autor,
      acao: acaoEscolhida,
    },
    success: function (response) {
      console.log("Resposta do PHP:", response);
    },
    error: function (xhr, status, error) {
      console.error("Erro na requisição AJAX:", error);
    },
  });
}
