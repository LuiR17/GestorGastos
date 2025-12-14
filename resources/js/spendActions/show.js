

document.addEventListener("click", function (e) {
    const card = e.target.closest(".spend-card");

    if (!card) return;

    const spendId = card.dataset.id;

    fetch(`/spends/${spendId}`)
        .then((response) => response.json())
        .then((data) => {
            openModal(data.data);
        });
});

function openModal(spend) {
    const modal = document.getElementById("spendModal");

    if (!modal) {
        console.error("Modal no encontrado");
        return;
    }

    // Asignamos los valores de la respuesta al modal
    document.getElementById("modalTitle").textContent = spend.title;
    document.getElementById("modalDescription").textContent =
        spend.description ?? "Sin descripcion";
    document.getElementById("modalAmount").textContent = `$${spend.price}`;

    // Mostramos el modal
    modal.classList.remove("hidden");
}

document.getElementById("closeModal").addEventListener("click", function () {
    document.getElementById("spendModal").classList.add("hidden");
});