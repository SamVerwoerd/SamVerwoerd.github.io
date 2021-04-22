const button = document.querySelector('.theme');
const elements = document.querySelectorAll('body, h1, .themed, li, .card-body, .card-img-top, .card, .footer, button');
const converButton = document.querySelector(".convertButton");
const changetext = document.querySelector(".meters");

let darkMode = false

const colorHandler = function(){
    for(let i = 0;i < elements.length ;i++){
        elements[i].classList.toggle('dark-theme')
    }
    if(button.textContent == "Light Mode"){
        button.textContent = "Dark Mode";
    }
    else{
        button.textContent = "Light Mode";
    }
}
 
const Converter = function() {
   const km = document.querySelector("input").value;
   const ms = km / 3.6;
   changetext.textContent = ms;
}

converButton.addEventListener('click', Converter);

button.addEventListener('click', colorHandler);

