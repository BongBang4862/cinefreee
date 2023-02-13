

document.addEventListener('DOMContentLoaded',function (e) {
    const modal = document.getElementById('modal');
    const btnagregarmovie = document.getElementById('btn-agregar-movie');
    const btnagregarlink = document.getElementById('btn-agregar-link');
    const btnagregarcategory = document.getElementById('btn-agregar-category');

    btn = [btnagregarmovie,btnagregarlink,btnagregarcategory]
    btn.forEach(element => { element.addEventListener('click',function(e){
            e.preventDefault();
            if(modal.style.display == 'none'){
                showModal(modal)
            }else{
                hideModal(modal)
            }
        })
        
    });

})

function showModal(modal) {
    modal.style.display = "block"
}
function hideModal(modal) {
    modal.style.display = "none"
}



