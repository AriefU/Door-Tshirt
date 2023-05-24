
// product
const sliderContainer = document.querySelector('.slider-container');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');
const productCards = Array.from(document.querySelectorAll('.product-card'));

let currentIndex = 0;
const maxIndex = productCards.length - 1;

function showProducts() {
  productCards.forEach((card, index) => {
    if (index >= currentIndex && index < currentIndex + 3) {
      card.style.display = 'block';
    } else {
      card.style.display = 'none';
    }
  });
}

function showNextProducts() {
  if (currentIndex < maxIndex - 2) {
    currentIndex++;
    showProducts();
  }
}

function showPrevProducts() {
  if (currentIndex > 0) {
    currentIndex--;
    showProducts();
  }
}

nextButton.addEventListener('click', showNextProducts);
prevButton.addEventListener('click', showPrevProducts);

showProducts();


// JavaScript code for the contact section

// Get the contact form
const contactForm = document.querySelector('.contact-form');

// Add submit event listener to the form
contactForm.addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent the form from submitting

  // Get the form input values
  const name = document.querySelector('#name').value;
  const email = document.querySelector('#email').value;
  const message = document.querySelector('#message').value;

  // Perform any necessary validation or data processing here

  // Clear the form fields
  document.querySelector('#name').value = '';
  document.querySelector('#email').value = '';
  document.querySelector('#message').value = '';

  // Display a success message or take any other desired action
  alert('Your message has been sent!');
});




// Initialize and display the Google Map
function initMap() {
  var mapOptions = {
    center: { lat: 5.554550635413467, lng:  95.34431235860512 }, // Replace with the desired coordinates
    zoom: 12, // Adjust the zoom level as needed
  };
  
  var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}

document.querySelector('form').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission
  
  // Perform form validation or additional processing if needed
  
  // Show success pop-up
  showSuccessPopup();
});

function showSuccessPopup() {
  alert("Purchase successful!");
}








  

  