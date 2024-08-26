// Get all open modal buttons
const openModalButtons = document.querySelectorAll(".open-modal");
const modal = document.getElementById("modal");
const modalContent = document.getElementById("modalContent");
const closeModal = document.getElementById("closeModal");
const closeModalFooter = document.getElementById("closeModalFooter");

// Function to open modal and set content
openModalButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const content = button.getAttribute("data-modal-content");
    modalContent.textContent = content;
    modal.classList.remove("hidden");
  });
});

// Function to close modal
const closeModalFunction = () => {
  modal.classList.add("hidden");
};

closeModal.addEventListener("click", closeModalFunction);
closeModalFooter.addEventListener("click", closeModalFunction);

// Close modal when clicking outside the modal content
modal.addEventListener("click", (e) => {
  if (e.target === modal) {
    closeModalFunction();
  }
});
