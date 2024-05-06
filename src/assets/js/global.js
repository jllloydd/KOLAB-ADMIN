function openSuccessModal(title, message) {
    // Close any existing modals
    const existingModal = document.querySelector('.modal.fade.show');
    if (existingModal) {
        const bootstrapModal = bootstrap.Modal.getInstance(existingModal);
        bootstrapModal.hide();
    }

    const modalContainer = document.getElementById("confirmModal");
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
                        <button type="button" class="btn btn-cancel" id="cancelModalButton" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-confirm" id="confirmModalButton">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
    `;

    modalContainer.innerHTML = modal;

    const bootstrapModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
    bootstrapModal.show(); 

    const successModalButton = document.getElementById('successModalButton');
    successModalButton.addEventListener('click', callback);
}
