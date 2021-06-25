//Selectors
const button = document.querySelector('.theme');
const elements = document.querySelectorAll('body, h1, .themed, li, .footer, button, .container');

let darkMode = false
//Dark mode colour change
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

button.addEventListener('click', colorHandler);


