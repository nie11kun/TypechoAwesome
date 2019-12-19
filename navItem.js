function ulAddClass(a) {
    for (var i = 0; i < a.length; i++) {
        a[i].classlist.add('navbar-nav', 'mr-auto');
        var listInNav = a[i].getElementsByClassName('li');
        if (listInNav) {
            liAddClass(listInNav);
        }
    }
}

function liAddClass(a) {
    for (var i = 0; i < a.length; i++) {
        a[i].classlist.add('nav-item');
        var aInNav = a[i].getElementsByClassName('a');
        if (aInNav) {
            aAddClass(aInNav);
        }
        var ulInList = a[i].getElementsByClassName('ul');
        if (ulInList) {
            ulAddClass(ulInList);
        }

    }

}

function aAddClass(a) {
    for (var i = 0; i < a.length; i++) {
        a[i].classlist.add('nav-link', 'nav-title'); 
    }
}

function navItemSytle() {

    var nav = document.getElementsByClassName('nav-item-style');
    if (!(isNaN(nav))) {
        ulAddClass(nav);
    }
}