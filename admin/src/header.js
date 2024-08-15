/* Admin-Header & Side Menu */

const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});

// Check the screen size on page load and set the initial state of the sidebar
document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.getElementById('sidebar');
    const screenWidth = window.innerWidth;

    if (screenWidth <= 1024) {
        sidebar.classList.add('hide');
    } else {
        sidebar.classList.remove('hide');
    }
});

// Add event listener to the menu bar for toggling the sidebar on smaller screens

const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
    sidebar.classList.toggle('hide');
});


const profileImage = document.getElementById('profileImage');
const dropdownMenu = document.getElementById('dropdownMenu');

profileImage.addEventListener('click', (e) => {
	e.stopPropagation();

	if (window.innerWidth >= 768) {
		dropdownMenu.classList.toggle('hidden');
	}
});

window.addEventListener('click', () => {
	if (!dropdownMenu.classList.contains('hidden') && window.innerWidth >= 768) {
		dropdownMenu.classList.add('hidden');
	}
});


/* Admin-Header & Side Menu */










