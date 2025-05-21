        // Modal Logic


        function openProjectModal(element) {
            const image = element.getAttribute('data-image');
            const title = element.querySelector('h3').innerText;
            const description = element.querySelector('p').innerText;
            //const title = element.getAttribute('data-title');
            //const description = element.getAttribute('data-description');
        
            document.getElementById('modalImage').src = image;
            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalDescription').innerText = description;
        
            document.getElementById('projectModal').style.display = 'block';
        }
    
        function closeProjectModal() {
            document.getElementById('projectModal').style.display = 'none';
        }
    
        window.onclick = function(event) {
            const modal = document.getElementById('projectModal');
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }



        function openModal(id) {
            document.getElementById(id).style.display = 'block';
        }
    
        function closeModal(id) {
            document.getElementById(id).style.display = 'none';
        }
    
        window.onclick = function(event) {
            const modals = document.querySelectorAll('.modal');
            modals.forEach(modal => {
                if (event.target === modal) {
                modal.style.display = "none";
                }
            });
        }