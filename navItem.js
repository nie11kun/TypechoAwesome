function ulAddClass(a) {
    for (var i = 0; i < a.length; i++) {
        a[i].classlist.add('navbar-nav', 'mr-auto');
    }
}

function liAddClass(a) {
    for (var i = 0; i < a.length; i++) {
        a[i].classlist.add('nav-item');
    }

}

function aAddClass(a) {
    for (var i = 0; i < a.length; i++) {
        a[i].classlist.add('nav-link', 'nav-title');
    }
}

function navItemSytle() {
    var ulnav = document.getElementsByClassName('nav-item-style');
    var linav = ulnav.getElementsByClassName('li');
    var anav = ulnav.getElementsByClassName('a');
    var ulInnav = ulnav.getElementsByClassName('ul');

    console.log(ulnav.length);
    
    ulAddClass(ulnav);
    ulAddClass(linav);
    ulAddClass(anav);
    ulAddClass(ulInnav);

}