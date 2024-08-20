const homeBtn = document.getElementById('homeBtn')
const magicHolder = document.querySelector('.magic-circle-holder')
const containerCollapse = document.querySelector('.container')

homeBtn.onclick = function () {
    containerCollapse.classList.toggle('active')
    setTimeout(function () {
        magicHolder.classList.toggle('active')
        setTimeout(function () {
            window.location.href = 'pages/homepage.html';
        }, 2500)
    }, 1000)
}

