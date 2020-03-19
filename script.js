(() => {
    let menu = document.querySelector('.category');
    let lvl = document.querySelectorAll('.cascader-list, .cascader-list2, .cascader-list3');
    let id = document.querySelectorAll('.category-drop');

    const openCatalog = event => {
        event.preventDefault();
        let targetElement = event.target;

        let forElements = Array.from(lvl);
        // console.log(forElements);
        /*1) Нужно поймать элемент массива в котором дата лвл будет равен дата айди элемента, по которому
        мы кликнули
         2) Нужно скрывать ненужные элементы массива при переключении на другие элементы*/
        let blockElem = forElements.filter(x => x.className !== targetElement.parentElement.className);
        let mapElementsNone = blockElem.map(x => x.style.display = 'none');
        let noneElements = forElements.filter(x => x.dataset.lvl === targetElement.dataset.id);
        let mapElementsBlock = noneElements.map((x) => {
                return [x.style.display = 'block'];
            }
        );

    };

    menu.addEventListener('click', openCatalog, false);
})();
