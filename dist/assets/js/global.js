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
                <div class="modal-content content-bg">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">${title}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- Close button with "X" icon -->
                    </div>
                    <div class="modal-body">
                        ${message}
                    </div>
                    <div class="modal-footer footer-style p-3 position-relative">
                        <button type="button" class="btn btn-confirm" id="okayModalButton" data-bs-dismiss="modal">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
        `;
        // <!-- Second Modal for Okay Button -->
        // <div class="modal fade" id="okayModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="okayModalLabel" aria-hidden="true">
        //     <div class="modal-dialog">
        //         <div class="modal-content">
        //             <div class="modal-header">
        //                 <h5 class="modal-title" id="okayModalLabel">Booking Confirmed</h5>
        //                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- Close button with "X" icon -->
        //             </div>
        //             <div class="modal-body">
        //                 This booking has been successfully confirmed!
        //             </div>
        //             <div class="modal-footer">
        //                 <button type="button" class="btn btn-primary" id="okayModalButton" data-bs-dismiss="modal">Okay</button>
        //             </div>
        //         </div>
        //     </div>
        // </div>

    modalContainer.innerHTML = modal;

    const bootstrapModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
    bootstrapModal.show(); 

    const confirmModalButton = document.getElementById('confirmModalButton');
    confirmModalButton.addEventListener('click', () => {
        // Hide the first modal
        bootstrapModal.hide();
        // Show the second modal
        const okayModal = new bootstrap.Modal(document.getElementById('okayModal'));
        okayModal.show();
    });
}
