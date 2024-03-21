import redirectTo from "./commom/redirectTo.js"

document.querySelector('div#sum button').addEventListener('click', ()=>{
    const num1 = document.querySelectorAll('div#sum input')[0].value;
    const num2 = document.querySelectorAll('div#sum input')[1].value;

    redirectTo(`calculadora/soma/${num1}/${num2}`);
})

document.querySelector('div#sub button').addEventListener('click', ()=>{
    const num1 = document.querySelectorAll('div#sub input')[0].value;
    const num2 = document.querySelectorAll('div#sub input')[1].value;

    redirectTo(`calculadora/subtracao/${num1}/${num2}`);
})

document.querySelector('div#multi button').addEventListener('click', ()=>{
    const num1 = document.querySelectorAll('div#multi input')[0].value;
    const num2 = document.querySelectorAll('div#multi input')[1].value;

    redirectTo(`calculadora/multiplicacao/${num1}/${num2}`);
})

document.querySelector('div#division button').addEventListener('click', ()=>{
    const num1 = document.querySelectorAll('div#division input')[0].value;
    const num2 = document.querySelectorAll('div#division input')[1].value;

    redirectTo(`calculadora/divisao/${num1}/${num2}`);
})
