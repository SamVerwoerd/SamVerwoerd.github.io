const converButton = document.querySelector(".convertButton");
const changetext = document.querySelector(".meters");

const Converter = function() {
    const km = document.querySelector("input").value;
    const ms = km / 3.6;
    changetext.textContent = ms;
 }
 converButton.addEventListener('click', Converter);