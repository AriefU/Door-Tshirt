
// product
const sliderContainer = document.querySelector('.slider-container');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');

const productCards = document.querySelectorAll('.product-card');
const cardWidth = productCards[0].offsetWidth;

let currentPosition = 0;
const totalProducts = productCards.length;
const visibleProducts = Math.floor(sliderContainer.offsetWidth / cardWidth);
const maxMovement = (totalProducts - visibleProducts) * cardWidth;

nextButton.addEventListener('click', () => {
  if (currentPosition > -maxMovement) {
    currentPosition -= cardWidth;
    sliderContainer.style.transform = `translateX(${currentPosition}px)`;
  }
});

prevButton.addEventListener('click', () => {
  if (currentPosition < 0) {
    currentPosition += cardWidth;
    sliderContainer.style.transform = `translateX(${currentPosition}px)`;
  }
});


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
    // Specify the coordinates for the map center
    const mapCenter = { lat: 5.554550635413467, lng:  95.34431235860512 };
  
    // Create a new map instance
    const map = new google.maps.Map(document.getElementById('map'), {
      center: mapCenter,
      zoom: 15 // Adjust the zoom level as desired
    });
  
    // Add a marker at the specified coordinates
    const marker = new google.maps.Marker({
      position: mapCenter,
      map: map,
      title: 'Door T-Shirt And Digital Printing' // Adjust the marker title as desired
    });
  }
  

