<!-- Modal for project images -->
<div id="imageModal" class="modal">
    <span class="close-modal">&times;</span>
    <img class="modal-content" id="modalImg">
    <div id="modalCaption"></div>
</div>

<!-- Confirmation Modal -->
<div id="successModal" class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50 hidden">
    <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg text-center max-w-sm w-full">
      <h3 class="text-xl  mb-4 text-green-600 dark:text-green-400">Message Sent!</h3>
      <p class="text-gray-700 dark:text-gray-300 mb-6">Thanks for reaching out. I’ll get back to you as soon as I can.</p>
      <button onclick="closeModalMessage()" class="bg-blue-600 hover:bg-blue-500 text-white px-6 py-2 rounded-full">Close</button>
    </div>
  </div>