document.addEventListener('DOMContentLoaded', function() {
    const sideLinks = document.querySelectorAll('.sidebar .side-menu li a');
    sideLinks.forEach((item) => {
        const li = item.parentElement;
        item.addEventListener('click', (event) => {
            if (item.classList.contains('logout')) {
                const confirmLogout = confirm('Are you sure you want to Log Out?');
                if (!confirmLogout) {
                    event.preventDefault();
                    return;
                }
            }
<<<<<<< HEAD
            sideLinks.forEach(i => i.parentElement.classList.remove('active'));
            li.classList.add('active');
        });
=======
        }

<<<<<<< HEAD
        sideLinks.forEach(i => i.parentElement.classList.remove('active'));
        li.classList.add('active');
=======

>>>>>>> 56af53e7d20ef3562155300bb4d14997589438b9
>>>>>>> Ushan
    });

    const sideBar = document.querySelector('.sidebar');
    const content = document.querySelector('.content');
    const menuButtons = document.querySelectorAll('.menu');

<<<<<<< HEAD
    if (sideBar && content && menuButtons.length > 0) {
        menuButtons.forEach(menuButton => {
            menuButton.addEventListener('click', () => {
                sideBar.classList.toggle('close');
                content.classList.toggle('expanded');
            });
        });
    } else {
        console.error('Sidebar, content, or menu elements not found');
    }
});
=======
const sideBar = document.querySelector('.sidebar');
const menuButtons = document.querySelectorAll('.menu');
<<<<<<< HEAD
menuButtons.forEach(menuButton => {
    menuButton.addEventListener('click', () => {
        sideBar.classList.toggle('close');
=======

if (localStorage.getItem('sidebarState') === 'closed') {
    sideBar.classList.add('close');
}

menuButtons.forEach(menuButton => {
    menuButton.addEventListener('click', () => {
        sideBar.classList.toggle('close');
        localStorage.setItem('sidebarState', sideBar.classList.contains('close') ? 'closed' : 'open');
>>>>>>> 56af53e7d20ef3562155300bb4d14997589438b9
    });

});
<<<<<<< HEAD:Journey Beyond/JS Scripts/Sidebar.js
>>>>>>> Ushan
=======


function resize(){
    if (window.innerWidth <= 768) {
        sideBar.classList.add('close');
        localStorage.setItem('sidebarState', 'closed');
    }
}

resize();
window.addEventListener('resize',resize);
>>>>>>> Ushan:Journey Beyond/Public/JS Scripts/Sidebar.js
