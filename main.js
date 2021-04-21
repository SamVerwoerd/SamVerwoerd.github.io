const button = document.querySelector('.theme');
const elements = document.querySelectorAll('body, h1, .themed, li, .card-body, .card-img-top, .card, .footer, button');

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
    let days = document.getElementById("numberDays").value;
    document.getElementById("hours").innerHTML = days / 24;
    // console.log(days, hours);
  }

button.addEventListener('click', colorHandler);

