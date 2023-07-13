import './bootstrap';


let successWindow = document.getElementById('successWindow')
let errorWindow = document.getElementById('errorWindow')
setTimeout(() => {
    successWindow.classList.toggle('hidden')
    errorWindow.classList.toggle('hidden')
}, 1000)