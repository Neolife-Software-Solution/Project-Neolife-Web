<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Modal with Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10 bg-gray-100">

    <!-- Buttons to open modal -->
    <div class="grid grid-cols-2 gap-4">
        <button data-modal-content="This is content for Modal 1" class="px-4 py-2 text-white bg-blue-500 rounded open-modal hover:bg-blue-600">
            Open Modal 1
        </button>
        <button data-modal-content="This is content for Modal 2" class="px-4 py-2 text-white bg-green-500 rounded open-modal hover:bg-green-600">
            Open Modal 2
        </button>
        <button data-modal-content="This is content for Modal 3" class="px-4 py-2 text-white bg-red-500 rounded open-modal hover:bg-red-600">
            Open Modal 3
        </button>
        <button data-modal-content="This is content for Modal 4" class="px-4 py-2 text-white bg-yellow-500 rounded open-modal hover:bg-yellow-600">
            Open Modal 4
        </button>
        <button data-modal-content="This is content for Modal 5" class="px-4 py-2 text-white bg-purple-500 rounded open-modal hover:bg-purple-600">
            Open Modal 5
        </button>
        <button data-modal-content="This is content for Modal 6" class="px-4 py-2 text-white bg-pink-500 rounded open-modal hover:bg-pink-600">
            Open Modal 6
        </button>
        <button data-modal-content="This is content for Modal 7" class="px-4 py-2 text-white bg-indigo-500 rounded open-modal hover:bg-indigo-600">
            Open Modal 7
        </button>
        <button data-modal-content="This is content for Modal 8" class="px-4 py-2 text-white bg-teal-500 rounded open-modal hover:bg-teal-600">
            Open Modal 8
        </button>
        <button data-modal-content="This is content for Modal 9" class="px-4 py-2 text-white bg-orange-500 rounded open-modal hover:bg-orange-600">
            Open Modal 9
        </button>
        <button data-modal-content="This is content for Modal 10" class="px-4 py-2 text-white bg-gray-500 rounded open-modal hover:bg-gray-600">
            Open Modal 10
        </button>
    </div>

    <!-- Modal (same modal for all buttons) -->
    <div id="modal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">
        <div class="w-1/3 bg-white rounded-lg shadow-lg">
            <div class="flex items-center justify-between p-4 border-b">
                <h3 class="text-xl font-semibold">Dynamic Modal</h3>
                <button id="closeModal" class="text-gray-500 hover:text-gray-700">&times;</button>
            </div>
            <div id="modalContent" class="p-4">
                <!-- Dynamic content will go here -->
            </div>
            <div class="flex justify-end p-4 border-t">
                <button id="closeModalFooter" class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600">Close</button>
            </div>
        </div>
    </div>

    <script>
        // Get all open modal buttons
        const openModalButtons = document.querySelectorAll('.open-modal');
        const modal = document.getElementById('modal');
        const modalContent = document.getElementById('modalContent');
        const closeModal = document.getElementById('closeModal');
        const closeModalFooter = document.getElementById('closeModalFooter');

        // Function to open modal and set content
        openModalButtons.forEach(button => {
            button.addEventListener('click', () => {
                const content = button.getAttribute('data-modal-content');
                modalContent.textContent = content;
                modal.classList.remove('hidden');
            });
        });

        // Function to close modal
        const closeModalFunction = () => {
            modal.classList.add('hidden');
        };

        closeModal.addEventListener('click', closeModalFunction);
        closeModalFooter.addEventListener('click', closeModalFunction);

        // Close modal when clicking outside the modal content
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeModalFunction();
            }
        });
    </script>
</body>
</html>
