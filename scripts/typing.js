const text = "To join the Abyssal guild, you need to register and put your personal information in our registration form. Be prepared to showcase your abilities and provide any necessary documentation.";
const typingText = document.getElementById("typing");

let currentIndex = 0;
let typingSpeed = 50; // Adjust typing speed (milliseconds)

function typeText() {
  if (currentIndex < text.length) {
    typingText.textContent += text.charAt(currentIndex);
    currentIndex++;
    setTimeout(typeText, typingSpeed);
  }
}

// Delay the typing animation start
setTimeout(typeText, 1000); // Adjust the delay time (milliseconds)
