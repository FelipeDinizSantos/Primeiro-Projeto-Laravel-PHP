import redirectTo from "./commom/redirectTo.js"

document.querySelector('#calculator').addEventListener('click', ()=>{
    redirectTo('calculadora');
})

document.querySelector('#genaretePessoalData').addEventListener('click', ()=>{
    redirectTo('gerarDadosPessoais');
})

document.querySelector('#getProducts').addEventListener('click', ()=>{
    redirectTo('produtos');
})