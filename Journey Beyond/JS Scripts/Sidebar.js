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
            sideLinks.forEach(i => i.parentElement.classList.remove('active'));
            li.classList.add('active');
        });
    });

    const sideBar = document.querySelector('.sidebar');
    const content = document.querySelector('.content');
    const menuButtons = document.querySelectorAll('.menu');

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