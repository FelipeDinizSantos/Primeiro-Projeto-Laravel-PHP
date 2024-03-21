import redirectTo from "./commom/redirectTo.js"

document.querySelector('#calculator').addEventListener('click', ()=>{
    redirectTo('calculadora');
})

document.querySelector('#genaretePessoalData').addEventListener('click', ()=>{
    redirectTo('gerarDadosPessoais');
})