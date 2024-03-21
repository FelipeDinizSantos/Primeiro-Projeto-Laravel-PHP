import redirectTo from "./commom/redirectTo.js"

const form = document.querySelector('form');
const inputs = form.querySelectorAll('input');

form.addEventListener('submit', (event)=>{
    event.preventDefault();

    const NAME = inputs[0].value;
    const LASTNAME = inputs[1].value;
    const RM = inputs[2].value;
    const GENDER = inputs[3].value;
    const ADDRESS = inputs[4].value;

    redirectTo(`ApresentarDadosPessoais/${NAME}/${LASTNAME}/${RM}/${GENDER}/${ADDRESS}`)
})