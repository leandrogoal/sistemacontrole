//mascara
function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
    var sep = 0;
    var key = '';
    var i = j = 0;
    var len = len2 = 0;
    var strCheck = '0123456789';
    var aux = aux2 = '';
    var whichCode = (window.Event) ? e.which : e.keyCode;
    if (whichCode == 13) return true;
    key = String.fromCharCode(whichCode); // Valor para o código da Chave
    if (strCheck.indexOf(key) == -1) return false; // Chave inválida
    len = objTextBox.value.length;
    for(i = 0; i < len; i++)
        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
    aux = '';
    for(; i < len; i++)
        if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
    aux += key;
    len = aux.length;
    if (len == 0) objTextBox.value = '';
    if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
    if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
    if (len > 2) {
        aux2 = '';
        for (j = 0, i = len - 3; i >= 0; i--) {
            if (j == 3) {
                aux2 += SeparadorMilesimo;
                j = 0;
            }
            aux2 += aux.charAt(i);
            j++;
        }
        objTextBox.value = '';
        len2 = aux2.length;
        for (i = len2 - 1; i >= 0; i--)
        objTextBox.value += aux2.charAt(i);
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
    }
    return false;
}
// multiplicação
const fields = document.querySelectorAll('.field')
const total = document.querySelector('.total')

function multiply() {
  let product = 1

  fields.forEach((field) => {
    let num = parseFloat(field.value, 10) 
    product *= isNaN(num) ? 1 : num
  })

  total.textContent = product.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
}

fields.forEach((field) => field.addEventListener('input', multiply))

// duplicar
$(function () {
    function removeCampo() {
          $(".removerCampo").unbind("click");
          $(".removerCampo").bind("click", function () {
             if($("tr.linhas").length > 1){
                  $(this).parent().parent().remove();
             }
          });
    }
    $(".adicionarCampo").click(function () {
      if ($('.linhas').length < 10) {
          novoCampo = $("tr.linhas:first").clone();
          novoCampo.find('input[type="text"]').val("");
          novoCampo.find('select').val("");
          novoCampo.insertAfter("tr.linhas:last");
          removeCampo();
        }
    });
  });

  function calcular() {
    const total = document.querySelector('.resultado')
    var n1 = parseFloat(document.getElementById('n1').value, 10);
    var n2 = parseFloat(document.getElementById('n2').value, 10);
    var resul = n2-n1;
    total.textContent = resul.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
    //document.getElementById('resultado').innerHTML =total;
  }
  total.textContent = product.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });