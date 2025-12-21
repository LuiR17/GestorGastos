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

    modal.dataset.id = spend.id;

    if (!modal) {
        console.error("Modal no encontrado");
        return;
    }

    // Asignamos los valores de la respuesta al modal
    document.getElementById("modalTitle").textContent = spend.title;
    document.getElementById("modalDescription").textContent =
        spend.description ?? "Sin descripcion";
    document.getElementById("modalAmount").textContent = `$${spend.price}`;

    modal.querySelector("#editTitle").value = spend.title;
    modal.querySelector("#editDescription").value = spend.description ?? "";
    modal.querySelector("#editPrice").value = spend.price;

    resetEditMode();

    // Mostramos el modal
    modal.classList.remove("hidden");
}

document.getElementById("closeModal").addEventListener("click", function () {
    document.getElementById("spendModal").classList.add("hidden");
});

