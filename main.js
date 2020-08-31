function CarregarValorInputPessoa(){
  
  var valorFinalInputPessoa = document.getElementById('inputPessoaValorBruto').value
  var paragravo = document.createElement('p')
  
    paragravo.innerHTML = `
      <div class="fundoParagrafo">
        <div class="paragrafo">
          ${valorFinalInputPessoa}
        </div>
      </div>
    `
  
      if(valorFinalInputPessoa == ''){
        fundoParagrafo.style.display = 'none'
      }
  
        document.body.appendChild(paragravo)
        
          document.getElementById('inputPessoaValorBruto').value = '';
          
        
}
