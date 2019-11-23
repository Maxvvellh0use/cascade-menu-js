


/*let categDrop = document.querySelectorAll('.category-drop');

/*let dataCategDrop = categDrop.getAttribute('data-lvl');

let menu = document.getElementById('menu');*/



document.addEventListener("click", function (e) {
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
        else if (lvl[i].style.display === 'block' && lvl[i].className !== 'cascader-list3') {
            lvl[i].style.display = 'block';
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






/*if (e.target.dataset.id === '1') {
    document.getElementById('1.1').style.display = 'block';
    document.getElementById('1').className = 'category-drop-active';
}
else if (e.target.dataset.id === '2') {
    document.getElementById('1.1').style.display = 'none';
    document.getElementById('1.2').style.display = 'block';
    document.getElementById('2').className = 'category-drop-active';
}
else if (e.target.dataset.id === '3') {
    document.getElementById('1.1').style.display = 'none';
    document.getElementById('1.2').style.display = 'none';
    document.getElementById('1.3').style.display = 'block';
    document.getElementById('3').className = 'category-drop-active';
}
else if (e.target.dataset.id === '4') {
    document.getElementById('1.1').style.display = 'none';
    document.getElementById('1.2').style.display = 'none';
    document.getElementById('1.3').style.display = 'none';
    document.getElementById('1.4').style.display = 'block';
    document.getElementById('4').className = 'category-drop-active';
}
else if (e.target.dataset.id === '5') {
    document.getElementById('1.1').style.display = 'none';
    document.getElementById('1.2').style.display = 'none';
    document.getElementById('1.3').style.display = 'none';
    document.getElementById('1.4').style.display = 'none';
    document.getElementById('1.5').style.display = 'block';
    document.getElementById('5').className = 'category-drop-active';
}
else if (e.target.dataset.id === '6') {
    document.getElementById('1.1').style.display = 'none';
    document.getElementById('1.2').style.display = 'none';
    document.getElementById('1.3').style.display = 'none';
    document.getElementById('1.4').style.display = 'none';
    document.getElementById('1.5').style.display = 'none';
    document.getElementById('1.6').style.display = 'block';
    document.getElementById('6').className = 'category-drop-active';
}
else if (e.target.dataset.id === '7') {
    document.getElementById('1.1').style.display = 'none';
    document.getElementById('1.2').style.display = 'none';
    document.getElementById('1.3').style.display = 'none';
    document.getElementById('1.4').style.display = 'none';
    document.getElementById('1.5').style.display = 'none';
    document.getElementById('1.6').style.display = 'none';
    document.getElementById('1.7').style.display = 'block';
    document.getElementById('7').className = 'category-drop-active';
}*/





