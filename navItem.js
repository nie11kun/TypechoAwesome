function ulAddClass(a) {
    for (var i = 0; i < a.length; i++) {
        a[i].classlist.add('navbar-nav', 'mr-auto');
    }

    for (var x = 0; x < a.childNodes.length; x++) {
        if (a.childNodes[x].className == "li") {
            linav = doc.childNodes[x];
            liAddClass(linav);
        }
    }
}

function liAddClass(a) {
    for (var i = 0; i < a.length; i++) {
        a[i].classlist.add('nav-item');
    }

    for (var x = 0; x < a.childNodes.length; x++) {
        if (a.childNodes[x].className == "a") {
            anav = doc.childNodes[x];
            aAddClass(anav);
        }
    }

    for (var y = 0; y < a.childNodes.length; y++) {
        if (a.childNodes[y].className == "ul") {
            ulnav = doc.childNodes[y];
            ulAddClass(ulnav);
        }
    }

}

function aAddClass(a) {
    for (var i = 0; i < a.length; i++) {
        a[i].classlist.add('nav-link', 'nav-title');
    }
}

function navItemSytle() {
    var ulnav = document.getElementsByClassName('nav-item-style');
    ulAddClass(ulnav);

    console.log(ulnav.length);
}