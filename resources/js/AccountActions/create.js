document
    .getElementById("modalAccount")
    .addEventListener("submit", async function (e) {
        e.preventDefault(); //evita que se recargue la plagina

        const form = e.target; //obtenemos el formulario que estamos enviando
        const url = form.action; //obtenemos la url del formulario

        const formData = new FormData(form);

        const response = await fetch(url, {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": form.querySelector("input[name=_token]").value,
                Accept: "application/json",
            },
            body: formData,
        });

        if (!response.ok) {
            const errorData = await response.json();
            console.log(errorData);
            return;
        }

        const data = await response.json();
        form.reset();
        addAccountCard(data.data);
    });

function addAccountCard(account) {
    const container = document.getElementById("accountsContainer");

    const card = document.createElement("div");
    card.classList = "flex justify-between w-full py-1 px-4 mb-2";

    card.innerHTML = `
        <div>
            <p class="font-semibold">${account.service_name}</p>
        </div>
        <div>
            <p>${account.price}</p>
        </div>
    `;

    container.prepend(card);
}

