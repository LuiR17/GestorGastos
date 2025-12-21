document.getElementById("deleteAccountBtn").addEventListener("click", async function () {
    const modal = document.getElementById("accountModal");
    const accountId = modal.dataset.id;

    if (!accountId) return;

    const response = await fetch(`/accounts/${accountId}`,{
        method: "DELETE",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
            "Accept": "application/json"
        }
    });

    if (!response.ok){
        alert("Error al eliminar");
        return;
    }

    document.querySelector(`.account-card[data-id="${accountId}"]`)?.remove();
    modal.classList.add("hidden");
});