const AccountBtn = document.getElementById('CreateAccountBtn');
const modalAccount = document.getElementById('modalAccount');

//Para abrir los modales 
AccountBtn.addEventListener('click', () =>{
    modalAccount.classList.remove('hidden');
    modalAccount.classList.add('flex');
});

modalAccount.addEventListener('click', (e) => {
    if(e.target === modalAccount){
        modalAccount.classList.add('hidden');
        modalAccount.classList.remove('flex');
    }
});