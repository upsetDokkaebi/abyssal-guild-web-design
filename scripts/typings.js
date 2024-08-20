const text = "Embark on thrilling quests and missions suitable for all skill levels. Join epic journeys, vanquish dangerous creatures, and uncover hidden treasures. Delve into ancient texts, study lost civilizations, and learn about creatures from distant lands. Our scholars are available to assist you in your pursuit of knowledge. Enhance your skills and abilities through comprehensive training programs. Learn combat techniques, master arcane magic, and unlock your full potential.";
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
