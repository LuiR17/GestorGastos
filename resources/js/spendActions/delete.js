document.getElementById("deleteSpendBtn").addEventListener("click", async function () {
    const modal = document.getElementById("spendModal");
    const spendId = modal.dataset.id;

    if (!spendId) return;

    const response = await fetch(`/spends/${spendId}`,{
        method: "DELETE",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
            "Accept": "application/json"
        }
    });

    if(!response.ok){
        alert("Error al eliminar");
        return;
    }

    document.querySelector(`.spend-card[data-id="${spendId}"]`)
            ?.remove();

    modal.classList.add("hidden");
});