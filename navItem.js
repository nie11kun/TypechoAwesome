function navItemSytle() {

    var nav = document.getElementsByClassName('nav-item-style');
    if (nav) {
        ulAddClass(nav);
    }
}

function ulAddClass(a) {
    a.classlist.add('navbar-nav', 'mr-auto');
    var listInNav = a.getElementsByClassName('li');
    if (listInNav) {
        liAddClass(listInNav);
    }
}

function liAddClass(a) {
    a.classlist.add('nav-item');
    var aInNav = a.getElementsByClassName('a');
    if (aInNav) {
        aAddClass(aInNav);
    }
    var ulInList = a.getElementsByClassName('ul');
    if (ulInList) {
        ulAddClass(ulInList);
    }
}

function aAddClass(a) {
    a.classlist.add('nav-link', 'nav-title');
}