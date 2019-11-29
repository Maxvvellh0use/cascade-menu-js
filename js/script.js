


/*let categDrop = document.querySelectorAll('.category-drop');

/*let dataCategDrop = categDrop.getAttribute('data-lvl');

let menu = document.getElementById('menu');*/



document.addEventListener("click", function (e) {
    let datalvl = document.getAttribute('data-lvl');
    let lvl = document.querySelectorAll('.cascader-list, .cascader-list2, .cascader-list3');
    let dataid = document.querySelectorAll('.cascader-list>div, .cascader-list2>div, .cascader-list3>div ');
    for (let i = 0; i < lvl.length; i++)
        if (lvl[i].dataset.lvl === e.target.dataset.id) {

            e.target.className = 'category-drop-active';
            for (let p = 0; p < dataid.length; p++) {
                if (dataid[p].className === 'category-drop-active') {
                    lvl[i].style.display = 'block';
                    e.target.className = 'category-drop-active';
                    console.log(lvl[1]);
                }
                else if (dataid[p].className !== 'category-drop-active') {
                    e.target.className = 'category-drop-active';
                }
            }
        }
    for (let i = 0; i < datalvl.length; i++) {

    }
});

/*
function closeMenu(e) {
    let category = document.querySelectorAll('#category');
    let categ = document.querySelectorAll('div>.category-drop-active');
    if ()
}*\


/*document.addEventListener("click", function (e) {
    let dataid = document.querySelectorAll('.category-drop');
    for (let p = 0; p < dataid.length; p++) {
        alert(dataid[p].className);
        }
*/







/*class Kazah {
    constructor (name) {
        this.name = 'Andrey'
    }
}

class Smolin extends Kazah {
    constructor (name) {
        super(name)
        this.age = 22;
    }
}

let man =*/



