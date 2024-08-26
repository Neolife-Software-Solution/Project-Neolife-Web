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

        <button class="px-4 py-2 text-white bg-blue-500 rounded open-modal hover:bg-blue-600">
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
        
        <div class="w-1/3 p-2 bg-white rounded-lg shadow-lg">
            <div class="flex items-center justify-between p-4 border-b">
                <h3 class="text-xl font-semibold">Finished Project</h3>
                <button id="closeModal" class="text-gray-500 hover:text-gray-700">&times;</button>
            </div>

            <div class="flex items-center justify-center w-full ">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
            </div>


            <label for="message" class="block mt-4 text-sm font-bold ">Project Description</label>
            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>


            <div id="modalContent" class="p-4">
                <!-- Dynamic content will go here -->
            </div>
            <div class="flex justify-end p-4 border-t">
                <button id="closeModalFooter" type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-5 ms-36">Save Changes</button>

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