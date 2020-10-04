function closeModal(el){
    if(el.classList.contains('close-modal')){
        console.log(el);
        console.log(el.parentElement.parentElement.parentElement);
        if(el.classList.contains('close-modal')){
            el.parentElement.parentElement.parentElement.style.display="none";
        }
    }

}


function displayModal(el){
    if(el.parentElement.classList.contains('portfolio-item')){
       document.querySelector(`#${el.parentElement.id}-modal`).style.display="flex";
    }
}
//Event: Close an item modal
document.querySelector('.modal-container').addEventListener('click',(e)=>{
    console.log("clossiiinnnggg");
    closeModal(e.target);

});
//Event: Display  an item modal
document.querySelector('.portfolio-item-container').addEventListener('click',(e)=>{
    displayModal(e.target);

});

