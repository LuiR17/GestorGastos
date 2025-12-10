const SpendBtn = document.getElementById('CreateSpendBtn');
const modalSpend = document.getElementById('modalSpend');

//Para abrir los modales 
SpendBtn.addEventListener('click', () =>{
    modalSpend.classList.remove('hidden');
    modalSpend.classList.add('flex');
});

modalSpend.addEventListener('click', (e) => {
    if(e.target === modalSpend){
        modalSpend.classList.add('hidden');
        modalSpend.classList.remove('flex');
    }
});