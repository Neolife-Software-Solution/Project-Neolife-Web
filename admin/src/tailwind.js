// employee view model js animation start

// Get all open modal buttons

const openModalButtons3 = document.querySelectorAll('.employee-view-modal');

const modal3 = document.getElementById('modal3');

const closeModal3 = document.getElementById('closeModal3');

const closeModalFooter3 = document.getElementById('closeModalFooter3');

// Function to open modal and set content

openModalButtons3.forEach(button => {

    button.addEventListener('click', () => {

        modal3.classList.remove('hidden');

    });

});

// Function to close modal

const closeModalFunction3 = () => {

    modal3.classList.add('hidden');

};

closeModal3.addEventListener('click', closeModalFunction3);

closeModalFooter3.addEventListener('click', closeModalFunction3);

// Close modal when clicking outside the modal content

modal3.addEventListener('click', (e) => {

    if (e.target === modal3) {

        closeModalFunction3();

    }
    
});

// employee view model js animation end

