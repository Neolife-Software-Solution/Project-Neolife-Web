
// Home page Dropdown

function Dropdown() {

    let dropdown = document.querySelector('#dropdownButton #dropdown');

function Dropdown() {

    const dropdown = document.querySelector('#dropdownButton #dropdown');


    dropdown.classList.toggle("hidden");

}


// Home page Dropdown


// imageslider

document.addEventListener('DOMContentLoaded', () => {

    const items = [

        { position: 0, el: document.getElementById('carousel-item-1') },

        { position: 1, el: document.getElementById('carousel-item-2') },

        { position: 2, el: document.getElementById('carousel-item-3') },

        { position: 3, el: document.getElementById('carousel-item-4') },

    ];

    const options = {

        defaultPosition: 0,

        interval: 2000,

        indicators: {

            activeClasses: 'bg-white dark:bg-gray-800',

            inactiveClasses: 'bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800',

            items: [

                { position: 0, el: document.getElementById('carousel-indicator-1') },

                { position: 1, el: document.getElementById('carousel-indicator-2') },

                { position: 2, el: document.getElementById('carousel-indicator-3') },

                { position: 3, el: document.getElementById('carousel-indicator-4') },

            ],

        },

        onNext: () => console.log('Next slider item is shown'),

        onPrev: () => console.log('Previous slider item is shown'),

        onChange: () => console.log('New slider item has been shown'),

    };

    // Initialize the carousel
    const carousel = new Carousel(document.getElementById('carousel-example'), items, options);

    // Ensure only the default position item is visible initially

    items.forEach(item => item.el.classList.add('hidden'));

    items[options.defaultPosition].el.classList.remove('hidden');
    
});


// imageslider

// estimatepage accordian animation

document.getElementById('openModalButton').addEventListener('click', function() {

const modal = document.getElementById('modal');

modal.classList.remove('hidden');

modal.classList.add('ease-out', 'duration-300', 'opacity-100', 'translate-y-0', 'sm:scale-100');

});

document.getElementById('cancelButton').addEventListener('click', function() {

const modal = document.getElementById('modal');

modal.classList.add('ease-in', 'duration-200', 'opacity-0', 'translate-y-4', 'sm:translate-y-0', 'sm:scale-95');

setTimeout(() => modal.classList.add('hidden'), 200);

});

// estimatepage accordian animation
