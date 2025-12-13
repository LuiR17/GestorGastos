const CardBtn = document.getElementById('createCardBtn');
const modalCard = document.getElementById('modalCard');

//Para abrir los modales 
CardBtn.addEventListener('click', () =>{
    modalCard.classList.remove('hidden');
    modalCard.classList.add('flex');
});

modalCard.addEventListener('click', (e) => {
    if(e.target === modalCard){
        modalCard.classList.add('hidden');
        modalCard.classList.remove('flex');
    }
});