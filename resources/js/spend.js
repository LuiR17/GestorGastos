document.getElementById('createSpendForm').addEventListener('submit', async function(e){
    e.preventDefault();

    const form = e.target;
    const url = form.action;

    const formData = new FormData(form);

    const response = await fetch(url, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': form.querySelector('input[name=_token]').value,
            'Accept': 'application/json'
        },
        body: formData
    });

    if(!response.ok){
        const errorData = await response.json();
        console.log(errorData);
        alert("Error en los datos");
        return;
    }

    const data = await response.json();

    form.reset();

    addSpendCard(data.data);
});

function addSpendCard(spend) {
    const container = document.getElementById('spendsContainer');

    const card = document.createElement('div');
    card.classList = "flex justify-between mt-4 border border-gray-200 shadow-md rounded-lg py-1 px-4";

    card.innerHTML = `
        <div>
            <p class="font-semibold">${spend.title}</p>
            <p>${spend.description}</p>
        </div>
        <p class="font-semibold">-$${spend.price}</p>
    `;

    container.prepend(card);


}