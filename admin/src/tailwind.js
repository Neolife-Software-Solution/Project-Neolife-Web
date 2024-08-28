// assign member sprint model js animation start

// Get all open modal buttons

const openModalButtons1 = document.querySelectorAll(".assign-team-modal");

const modal1 = document.getElementById("modal1");

const modalContent1 = document.getElementById("modalContent1");

const closeModal1 = document.getElementById("closeModal1");

const closeModalFooter1 = document.getElementById("closeModalFooter1");

// Function to open modal and set content

openModalButtons1.forEach((button) => {

  button.addEventListener("click", () => {

    // const content = button.getAttribute("data-modal-content");

    // modalContent1.textContent = content;

    modal1.classList.remove("hidden");

  });

});

// Function to close modal

const closeModalFunction1 = () => {

  modal1.classList.add("hidden");

};

closeModal1.addEventListener("click", closeModalFunction1);

closeModalFooter1.addEventListener("click", closeModalFunction1);

// Close modal when clicking outside the modal content

modal1.addEventListener("click", (e) => {
    
  if (e.target === modal1) {

    closeModalFunction1();
  }

});

// assign member sprint model js animation end

// add sprint model js animation start

// Get all open modal buttons

const openModalButtons2 = document.querySelectorAll(".add-sprint-modal");

const modal2 = document.getElementById("modal2");

const modalContent2 = document.getElementById("modalContent2");

const closeModal2 = document.getElementById("closeModal2");

const closeModalFooter2 = document.getElementById("closeModalFooter2");

// Function to open modal and set content

openModalButtons2.forEach((button) => {

  button.addEventListener("click", () => {

    // const content = button.getAttribute("data-modal-content");

    // modalContent2.textContent = content;

    modal2.classList.remove("hidden");

  });

});

// Function to close modal

const closeModalFunction2 = () => {

  modal2.classList.add("hidden");

};

closeModal2.addEventListener("click", closeModalFunction2);

closeModalFooter2.addEventListener("click", closeModalFunction2);

// Close modal when clicking outside the modal content

modal2.addEventListener("click", (e) => {
    
  if (e.target === modal2) {

    closeModalFunction2();
  }

});

// add sprint model js animation end

