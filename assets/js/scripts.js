


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
            ${data.message == "verified" || data.message == "validated" || data.message == "approved"  ? 'Email verified!' : data.message}
          </div>
        `;
        if (data.success && (data.message == "verified" || data.message == "validated" || data.message == "approved")) {
          setTimeout(() => {
            var elem = document.getElementById('input_verify_email');
            elem.classList.add('offscreen');
            //slideUp(elem,300);
            elem.sli
            var elem = document.getElementById('button_verify_email');
            elem.classList.add('offscreen');
            //slideUp(elem,300);
            var elem = document.getElementById('button_download_document');
            elem.classList.remove('offscreen');
            //elem.href = 'download.php?token=' + data.token;
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



//
// Download button click event handler - Checks if the download is allowed before proceeding
// It uses the Fetch API to send the form data to the server and handle the response

document.getElementById('button_download_document').addEventListener('click', function (e) {
  e.preventDefault();

  const token = this.dataset.token;
  const purpose = this.dataset.purpose;
  const target = this.dataset.target;

  const previewUrl = `download.php?token=${encodeURIComponent(token)}&purpose=${encodeURIComponent(purpose)}&target=${encodeURIComponent(target)}&preview=1`;

  fetch(previewUrl)
    .then(response => {
      if (!response.ok) {
        throw new Error(`Error: ${response.status} ${response.statusText}`);
      }
      return response.text();
    })
    .then(text => {

      document.getElementById('response').innerHTML = "<span>File Downloaded!</span>";
      document.getElementById('response').classList.add('text-green-600');

      // Trigger download if the preview check passed
      const iframe = document.createElement('iframe');
      iframe.style.display = 'none';
      iframe.src = `download.php?token=${encodeURIComponent(token)}&purpose=${encodeURIComponent(purpose)}&target=${encodeURIComponent(target)}`;
      document.body.appendChild(iframe);
    })
    .catch(error => {
      document.getElementById('response').classList.add('text-red-600');
      document.getElementById('response').textContent = error.message;
      if (error.message.includes('403')) {
        document.getElementById('response').textContent = 'Permission Denied. Expired Token.';
      }
      else if (error.message.includes('404')) {
        document.getElementById('response').textContent = 'File not found.';
      }
      else if (error.message.includes('500')) {
        document.getElementById('response').textContent = 'Server error. Please try again later.';
      }
      else {
        document.getElementById('response').textContent = 'An unexpected error occurred.';
      }

      
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
