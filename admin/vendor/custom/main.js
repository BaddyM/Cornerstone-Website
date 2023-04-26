let nav = document.getElementById('hover-nav');
let nav_item = document.getElementById('hover-nav-item');

let nav2 = document.getElementById('hover-nav2');
let nav_item2 = document.getElementById('hover-nav-item2');

//nav 1
nav.addEventListener('mouseenter', function () {
    nav_item.style.display = 'block';
});

nav.addEventListener('click', function () {
    if (nav_item.style.display == 'block') {
        nav_item.style.display = 'none';
    }
    else {
        nav_item.style.display = 'block';
        nav_item.style.position = 'relative';
    }
});
//nav 2
nav2.addEventListener('mouseenter', function () {
    nav_item2.style.display = 'block';
});

nav2.addEventListener('click', function () {
    if (nav_item2.style.display == 'block') {
        nav_item2.style.display = 'none';
    }
    else {
        nav_item2.style.display = 'block';
        nav_item2.style.position = 'relative';
    }
});

//on mouse leave
nav.addEventListener('mouseleave', function () {
    nav_item.style.display = 'none';
});
//on mouse leave nav 2
nav2.addEventListener('mouseleave', function () {
    nav_item2.style.display = 'none';
});

/*------------------------------------ Menu list ---------------------------------*/
const menuList = document.getElementsByClassName('menu');
const Items = document.getElementById('nav-elements');

function myMenu() {
    if (Items.style.display === 'none') {
        Items.style.display = 'block';
    }
    else {
        Items.style.display = 'none';
    }
}