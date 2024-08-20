const text ="Join our guild on a captivating journey where every step is met with unbridled excitement and boundless opportunities. Register today and become a vital part of our guild's legacy. Together, we shall conquer the realm of enchantment and adventure!";
const typingText = document.getElementById("typing");

let currentIndex = 0;
let typingSpeed = 30; // Adjust typing speed (milliseconds)

function typeText() {
  if (currentIndex < text.length) {
    typingText.textContent += text.charAt(currentIndex);
    currentIndex++;
    setTimeout(typeText, typingSpeed);
  }
}

const letters ="Are you ready to embark on an extraordinary journey of camaraderie and adventure? Join the prestigious Abyss Guild, where greatness awaits! Will you seize this opportunity and register to become a valued member of our guild?";
const typingLetter = document.getElementById("letter");

let currentlyIndex = 0;
let typingSPeed = 50; // Adjust typing speed (milliseconds)
let delay = 50000;

function typeLetter() {
  if (currentlyIndex < letters.length) {
    typingLetter.textContent += letters.charAt(currentlyIndex);
    currentlyIndex++;
    setTimeout(typeLetter, typingSpeed);
  }
}


function typingMessage() {
    setTimeout(typeLetter, delay);
    typeLetter();
}


// Delay the typing animation start
setTimeout(typeText, 1000); // Adjust the delay time (milliseconds)

const nav = document.querySelector('.navigation')
const navBtn = document.getElementById('navBtn')
const reg2Btn = document.querySelector('.registration')
const reg3Btn = document.querySelector('.registrationForm')
const women = document.querySelector('.women')
const introCard = document.querySelector('.card')
const nextBtn = document.querySelector('.next_btn')
const textBox = document.getElementById('letter')
const introBox = document.querySelector('.introduction')
const introClose = document.querySelector('.closeBtn')
// const regform = document.querySelector('form')
const magicHolder = document.querySelector('.magic-circle-holder')

var navOpen;
function navMenu() {
    nav.classList.toggle('active')
    navBtn.classList.toggle('active')
    if (!navOpen) {
        navBtn.innerHTML = `<i class="fa-solid fa-xmark"></i>`;
        navOpen = true;
    } else {
        navBtn.innerHTML = `<i class="fa-solid fa-bars"></i>`;
        navOpen = false;
    }
}

var regformAvailable = false;
var popupReg;
function regPopup() {
    if (!popupReg) {
        reg2Btn.classList.toggle('pop')
        setTimeout(function () {
            reg3Btn.classList.toggle('active')
            if (regformAvailable) {
                setTimeout(function () {
                    introClose.classList.toggle('active')
                    // regform.classList.add('active')
                }, 700);
            } else {
                setTimeout(function () {
                    women.classList.add('active')
                    setTimeout(function () {
                        introCard.classList.add('active')
                        typingMessage()
                    }, 500);
                }, 1500);
            }
        }, 1000);
        popupReg = true;
    } else {
        // regform.classList.toggle('active')
        introClose.classList.toggle('active')
        reg3Btn.classList.toggle('active')
        setTimeout(function () {
            reg2Btn.classList.toggle('pop')
        }, 1000);
        popupReg = false;
    }
}

var introDone;
nextBtn.onclick = function () {
    if (!introDone) {
        typeLetter();
        textBox.innerHTML = `
        <span>Be part of our enchanting community by providing the required information. Fill in the fields with your personal details and if ever you don't know what to provide, leave it blank if that's not required field</span>
        `;
        nextBtn.innerHTML = `
        <span>Register Here!<i class="fa-regular fa-id-card"></i></span>
        `;
        introDone = true;
    } else {
        magicHolder.classList.toggle('active')
        setTimeout(function () {
        window.location.href = '../pages/regform.html';
        }, 2500)
    }
}

introClose.onclick = function () {
    regPopup();
}


