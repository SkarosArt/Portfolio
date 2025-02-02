document.addEventListener("DOMContentLoaded", (e) => {

const listItems = document.querySelectorAll('.nav-item');
const allimages = document.querySelectorAll('.container .col');

for(let i = 0; i < listItems.length; i++){
    listItems[i].addEventListener('click', function(){
        toggleActiveClass(listItems[i]);
        toggleimages(listItems[i].dataset.categories);
    });
}

function toggleActiveClass(active){
    listItems.forEach(item => {
        item.classList.remove('active');
    })
    active.classList.add('active');
}

function toggleimages(dataClass){
    if(dataClass === 'all'){
        for(let i = 0; i<allimages.length; i++){
            allimages[i].style.display = 'flex';
        }
    }
    else{
        for(let i = 0; i<allimages.length; i++){
            dataCategories = allimages[i].dataset.categories.split('|');
            dataCategories.includes(dataClass) ? allimages[i].style.display = 'flex' : allimages[i].style.display = 'none';
        }
    }
}
});

function openDialog(i){
    closeDialog();
    var dialog = document.getElementById('dialog' + i);
    dialog.show();
    document.body.style.overflow='hidden';
}
function closeDialog(){
    var dialog = document.getElementsByTagName('dialog');
    for(let d of dialog)
    {
        d.close();
    }
    document.body.style.overflow='scroll';
}