document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form_verify_email');
    const responseDiv = document.getElementById('response');
  
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      const formData = new FormData(form);
  
      fetch('verify_email.php', {
        method: 'POST',
        body: formData
      })
      .then(res => res.json())
      .then(data => {
        
        responseDiv.innerHTML = `
          <div class="${data.success && (data.message == "verified" || data.message == "validated" || data.message == "approved")  ? 'text-green-600' : 'text-red-600'}">
            ${data.message == "verified" ? 'Email verified!' : data.message}
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





