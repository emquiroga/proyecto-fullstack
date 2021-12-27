const image_update = document.querySelector('#update_image');

image_update.addEventListener('click', formularioUpdate);

function formularioUpdate(){
    const form_image_update = document.querySelector('#form_update_image'); 
    if(form_image_update.hidden){
        form_image_update.hidden = false;
    }else{
        form_image_update.hidden = true;
    };
}