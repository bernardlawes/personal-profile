


//
// This script handles the form submission for email verification and the download button accessibility
// It uses the Fetch API to send the form data to the server and handle the response

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form_verify_email');
    const responseDiv = document.getElementById('response');
  
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      const formData = new FormData(form);
  
      fetch('func-verify-email.php', {
        method: 'POST',
        body: formData
      })
      .then(res => res.json())
      .then(data => {
        
        responseDiv.innerHTML = `
          <div class="${data.success && (data.message == "verified" || data.message == "validated" || data.message == "approved")  ? 'text-green-600' : 'text-red-600'}">
            ${data.message == "verified" || data.message == "validated" || data.message == "approved"  ? 'Thank you, Email verified!' : data.message}
          </div>
        `;
        if (data.success && (data.message == "verified" || data.message == "validated" || data.message == "approved")) {
          setTimeout(() => {
            var elem = document.getElementById('input_verify_email');
            elem.classList.add('offscreen');
            //slideUp(elem,300);
            elem.sli
            //var elem = document.getElementById('button_verify_email');
            //elem.classList.add('offscreen');
            //slideUp(elem,300);
            var elem = document.getElementById('div_download_approved');
            elem.classList.remove('offscreen');
            //elem.href = 'download.php?token=' + data.token;
            var elem = document.getElementById('button_download_document');
            elem.dataset.token = data.token;

            setTimeout(() => {
                //slideDown(elem,300);
                responseDiv.innerHTML = '&nbsp;';
            }, 1000);
            
          }, 1000); // Redirect after 2 seconds
        }

      })
      .catch(err => {
        responseDiv.innerHTML = '<div class="text-red-600">Error verifying email.</div>';
        console.error(err);
      });
    });




document.getElementById('button_shedule_meeting').addEventListener('click', function (e) {
  e.preventDefault();

  let downloadbtn = document.getElementById('button_download_document');

  let token = downloadbtn.dataset.token;
  let purpose = downloadbtn.dataset.purpose;
  let target = downloadbtn.dataset.target;

  if (!token || !purpose || !target) {
    const form = document.getElementById('form_verify_email');
    form.requestSubmit();

    console.log('No token, purpose, or target provided. Requesting email verification...');

    setTimeout(() => {
      token = downloadbtn.dataset.token;
      purpose = downloadbtn.dataset.purpose;
      target = downloadbtn.dataset.target;

      if (!token || !purpose || !target) {
        console.error('Error: Missing token, purpose, or target.');
        document.getElementById('response').textContent = 'Please verify your email first!';
        document.getElementById('response').classList.add('text-red-600');
        return;
      }

      document.getElementById('button_shedule_meeting').click();
    }, 1500);

    return;
  }

  window.open('https://calendly.com/bernardlawes/30min', '_blank');
});

//
// Download button click event handler - Checks if the download is allowed before proceeding
// It uses the Fetch API to send the form data to the server and handle the response

document.getElementById('button_download_document').addEventListener('click', function (e) {
  e.preventDefault();

  var token = this.dataset.token;
  var purpose = this.dataset.purpose;
  var target = this.dataset.target;

  if (!token || !purpose || !target) {

    
    const form = document.getElementById('form_verify_email');
    form.requestSubmit();
    
    console.log('No token, purpose, or target provided. Requesting email verification...');

    setTimeout(() => {
      token = this.dataset.token;
      purpose = this.dataset.purpose;
      target = this.dataset.target;
      if (!token || !purpose || !target) {
        //document.getElementById('response').textContent = 'Error: Missing token, purpose, or target.';
        console.error('Error: Missing token, purpose, or target.');
        document.getElementById('response').textContent = 'Please verify your email first!';
        document.getElementById('response').classList.add('text-red-600');
        return;
      }
      document.getElementById('button_download_document').click();
    }, 1500);

    return;

  }

  console.log(`Token: ${token}, Purpose: ${purpose}, Target: ${target}`);


  const url = `download.php?token=${encodeURIComponent(token)}&purpose=${encodeURIComponent(purpose)}&target=${encodeURIComponent(target)}`;

  fetch(url)
    .then(response => {
      if (!response.ok) {
        // The response has a non-200 status (e.g., 403)
        return response.text().then(text => {
          throw new Error(text); // Pass PHP message to .catch()
        });
      }
      return response.blob();
    })
    .then(blob => {
      const downloadUrl = window.URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = downloadUrl;
      a.download = target;
      document.body.appendChild(a);
      a.click();
      a.remove();
      window.URL.revokeObjectURL(downloadUrl);
    })
    .catch(error => {
      document.getElementById('response').textContent = 'Error downloading file.';
      console.error('Download error:', error);
      console.log(error.message);
      // Optionally, you can show an error message to the user  
    });


});


  });

// Function to slide up an element
// It sets the height to the scrollHeight, then animates it to 0px
// It also sets the overflow to hidden and removes the transition properties after the animation

function slideUp(element, duration = 300) {
  element.style.height = element.scrollHeight + 'px';
  element.style.overflow = 'hidden';
  element.offsetHeight; // force reflow

  element.style.transition = `height ${duration}ms ease`;
  element.style.height = '0px';

  setTimeout(() => {
    element.style.display = 'none';
    element.style.removeProperty('height');
    element.style.removeProperty('overflow');
    element.style.removeProperty('transition');
  }, duration);
}

// Function to slide down an element
// It sets the display to block, then animates the height from 0px to the scrollHeight
// It also resets the overflow and transition properties after the animation

function slideDown(element, duration = 300) {
  element.style.removeProperty('display'); // reset display if it was none

  let display = window.getComputedStyle(element).display;
  if (display === 'none') element.style.display = 'block';

  let height = element.scrollHeight + 'px';

  element.style.overflow = 'hidden';
  element.style.height = '0px';
  element.offsetHeight; // force reflow

  element.style.transition = `height ${duration}ms ease`;
  element.style.height = height;

  setTimeout(() => {
    element.style.removeProperty('height');
    element.style.removeProperty('overflow');
    element.style.removeProperty('transition');
  }, duration);
}

// Function to animate the overlay and navigate to a new URL
// It removes the translate-x-full class and adds the translate-x-0 class to animate the overlay
// It also sets a timeout to navigate to the new URL after the animation is complete
// The timeout duration should match the animation duration (500ms in this case)

function animateAndNavigate(e, url) {
  e.preventDefault(); // Stop default link behavior

  const overlay = document.getElementById('anim');
  overlay.classList.remove('translate-x-full');
  overlay.classList.add('translate-x-0');

  // Wait for animation to finish (match duration-500)
  setTimeout(() => {
    window.location.href = url;
  }, 5000);
}


// Function to open the image modal when an image is clicked
// It sets the modal display to block, sets the image source and alt text, and adds event listeners for closing the modal
// The modal can be closed by clicking the close button or clicking outside the modal
// The modal is hidden by setting the display to none and removing the event listeners
  let modal = document.getElementById('imageModal');
  let modalImg = document.getElementById('modalImg');
  let captionText = document.getElementById('modalCaption');
  let closeBtn = document.getElementsByClassName('close-modal')[0];
  
  function openModal(img) {
      modal.style.display = "block";
      modalImg.src = img.src;
      captionText.innerHTML = img.alt;
  }
  
  closeBtn.onclick = function() {
      modal.style.display = "none";
  }
  
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }

    const form = document.getElementById("contactForm");
    const successModal = document.getElementById("successModal");
  
    form.addEventListener("submit", async function (e) {
      e.preventDefault();
  
      const formData = new FormData(form);
      const action = form.action;
  
      try {
        const res = await fetch(action, {
          method: "POST",
          body: formData,
          headers: {
            Accept: "application/json",
          },
        });
  
        if (res.ok) {
          form.reset();
          openModalMessage();
        } else {
          alert("❌ Something went wrong. Please try again.");
        }
      } catch (err) {
        alert("❌ Submission failed. Please check your connection.");
      }
    });
  
    // Close modal when clicking the close button
    function openModalMessage() {
      successModal.classList.remove("hidden");
    }
  
    // Close modal when clicking the close button
    function closeModalMessage() {
      successModal.classList.add("hidden");
    }
  
    // Optional: close modal when clicking outside the box
    window.addEventListener("click", (e) => {
      if (e.target === successModal) closeModalMessage();
    });


// This function handles the theme toggle button
// Toggles the dark class on the html element and updates the local storage
  const toggle = document.getElementById("themeToggle");
  const html = document.documentElement;
  toggle.addEventListener("click", () => {
    html.classList.toggle("dark");
    localStorage.setItem("theme", html.classList.contains("dark") ? "dark" : "light");
    toggle.innerHTML = html.classList.contains("dark") ? "☀️ Light Mode" : '🌙 <span style="color:white">Dark Mode</span>';
  });
  if (localStorage.getItem("theme") === "dark") html.classList.add("dark");



  // Dynamically truncates text to a maximum number of characters (e.g. 100),
  document.querySelectorAll('.truncate-js').forEach(el => {

    const maxChars = parseInt(el.dataset.maxChars, 10);
    const fullText = el.innerText.trim();
  
    if (fullText.length > maxChars) {
      el.innerText = fullText.slice(0, maxChars).trimEnd() + '…';
    }
  });
