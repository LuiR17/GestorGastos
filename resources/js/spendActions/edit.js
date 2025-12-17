window.resetEditMode = function () {
    toggleEdit(false);
};


document.getElementById("editSpendBtn").addEventListener("click", function(){
    toggleEdit(true);
});

function toggleEdit(editing){

    setTimeout(() => {
    document.getElementById("modalTitle").classList.toggle("hidden", editing);
    document.getElementById("modalDescription").classList.toggle("hidden", editing);
    document.getElementById("modalAmount").classList.toggle("hidden", editing);

    document.getElementById("editTitle").classList.toggle("hidden", !editing);
    document.getElementById("editDescription").classList.toggle("hidden", !editing);
    document.getElementById("editPrice").classList.toggle("hidden", !editing);

    document.getElementById("editSpendBtn").classList.toggle("hidden", editing);
    document.getElementById("saveSpendBtn").classList.toggle("hidden", !editing);
    }, 50);
 
}

function resetEditMode(){
    toggleEdit(false);
}

document.getElementById("saveSpendBtn").addEventListener("click", async function(){
    const modal = document.getElementById("spendModal");
    const spendId = modal.dataset.id;

    const data = {
        title: document.getElementById("editTitle").value,
        description: document.getElementById("editDescription").value,
        price: document.getElementById("editPrice").value
    };

    const response = await fetch(`/spends/${spendId}`,{
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

    const card = document.querySelector(`.spend-card[data-id="${spendId}"]`);
    card.querySelector("p.font-semibold").textContent = result.data.title;
    card.querySelector("p:not(.font-semibold)").textContent = result.data.description;

    modal.classList.add("hidden");
});
