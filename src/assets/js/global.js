function openSuccessModal(title, message) {
    const modalContainer = document.getElementById("modal");
    const modal = `
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">${title}</h5>
                    </div>
                    <div class="modal-body">
                        ${message}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="successModalButton" data-bs-dismiss="modal">Okay</button>
                    </div>
                </div>
            </div>
        </div>
    `;

    modalContainer.innerHTML = modal; // Inject the modal HTML into the modal container

    const bootstrapModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
    bootstrapModal.show(); // Show the modal

    console.log(`Modal opened with title: ${title} and message: ${message}`);
}
