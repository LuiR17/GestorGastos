
document.addEventListener("click", function (e) {
    const card = e.target.closest(".account-card");

    if (!card) return;

    const accountId = card.dataset.id;

    fetch(`/accounts/${accountId}`)
        .then((response) => response.json())
        .then((data) => {
            openModal(data.data);
        });
});

function openModal(account) {
    const modal = document.getElementById("accountModal");

    modal.dataset.id = account.id;

    if (!modal) {
        console.error("Modal no encontrado");
        return;
    }

    // Asignamos los valores de la respuesta al modal
    document.getElementById("modalServicename").textContent = account.service_name;
    document.getElementById("modalPrice").textContent =
        account.price ?? "Sin precio";
    document.getElementById(
        "modalRenovation"
    ).textContent = `$${account.renovation}`;

    modal.querySelector("#editServicename").value = account.service_name;
    modal.querySelector("#editAccountPrice").value = account.price ?? "";
    modal.querySelector("#editRenovation").value = account.renovation;

    resetEditMode();

    // Mostramos el modal
    modal.classList.remove("hidden");
}

document.getElementById("closeAccountModal").addEventListener("click", function () {
     document.getElementById("accountModal").classList.add("hidden");
});