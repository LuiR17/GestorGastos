window.resetEditMode = function () {
    toggleEdit(false);
};

document.getElementById("editAccountBtn").addEventListener("click", function (){
    toggleEdit(true);
});

function toggleEdit(editing){
    setTimeout(() => {
        document.getElementById("modalServicename").classList.toggle("hidden", editing);
        document.getElementById("modalPrice").classList.toggle("hidden", editing);
        document.getElementById("modalRenovation").classList.toggle("hidden", editing);

        document.getElementById("editServicename").classList.toggle("hidden", !editing);
        document.getElementById("editAccountPrice").classList.toggle("hidden", !editing);
        document.getElementById("editRenovation").classList.toggle("hidden", !editing);

        document.getElementById("editAccountBtn").classList.toggle("hidden", editing);
        document.getElementById("saveAccountBtn").classList.toggle("hidden", !editing);
    }, 50);
}

function resetEditMode(){
    toggleEdit(false);
}

document.getElementById("saveAccountBtn").addEventListener("click", async function(){
    const modal = document.getElementById("accountModal");
    const accountId = modal.dataset.id;

    const data = {
        service_name: document.getElementById("editServicename").value,
        price: document.getElementById("editAccountPrice").value,
        renovation: document.getElementById("editRenovation").value
    };

    const response = await fetch(`/accounts/${accountId}`,{
        method: "PUT",
        credentials: "same-origin",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
            "Accept": "application/json"
        },
        body: JSON.stringify(data)
    });

    if (!response.ok){
        alert("Error al actualizar");
        return;
    }

    const result = await response.json();

    const card = document.querySelector(`.account-card[data-id="${accountId}"]`);
    card.querySelector("p.font-semibold").textContent = result.data.service_name;
    card.querySelector("div > p:not(.font-semibold)").textContent = result.data.price;

    modal.classList.add("hidden");
});