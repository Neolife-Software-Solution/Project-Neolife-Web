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

const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})

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









