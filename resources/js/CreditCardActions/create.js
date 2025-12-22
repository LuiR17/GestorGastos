document.getElementById("modalCard")
    .addEventListener("submit", async function (e){
        e.preventDefault();

        const form = e.target;
        const url = form.action;

        const formData = new FormData(form);

        const response = await fetch(url,{
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
        addCard(data.data);
    });

    function addCard(addCard) {
        const container = document.getElementById("cardsContainer");
    
        const card = document.createElement("div");
        card.classList = "flex justify-between w-full py-1 px-4 mb-2";
    
        card.innerHTML = `
            <div>
                <p class="font-semibold">${addCard.card_name}</p>
            </div>
            <div>
                <p>${addCard.credit_limit}</p>
            </div>
        `;
    
        container.prepend(card);
    }