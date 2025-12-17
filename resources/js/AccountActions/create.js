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
    
}
