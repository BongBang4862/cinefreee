

document.addEventListener('DOMContentLoaded',function (e) {
    const modal = document.getElementById('modal');
    const btnagregarmovie = document.getElementById('btn-agregar-movie');
    const btnagregarlink = document.getElementById('btn-agregar-link');
    const btnagregarcategory = document.getElementById('btn-agregar-category');
    const btncerralmodal = document.getElementById('btn-close-modal');
    const category = document.getElementById('addCategory');
    const link = document.getElementById('addLink');
    btncerralmodal.addEventListener('click',function(e){
        hideModal(modal);
        
     })
    btn = [btnagregarmovie ,btnagregarlink,btnagregarcategory]

    btn.forEach(element => { element.addEventListener('click',function(e){
            e.preventDefault();
            switch (element) {
                case btnagregarmovie:
                    if (modal.style.display=='none'){
                        showModal(modal);
                    }else{
                       
                    }
                    break;
                case btnagregarlink:
                    if (link.style.display=='none'){
                        showModal(link);
                    }else{
                        
                        hideModal(link);
                    }
                    break;
                case btnagregarcategory:
                    if (category.style.display=='none'){
                        showModal(category);
                    }else{
                        
                        hideModal(category);
                    }
                    break;
            
                default:
                    break;
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



