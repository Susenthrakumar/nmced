window.onload = function () {
    const modal = document.getElementById('message-modal');
    const messageContent = modal.querySelector('.modal-content').textContent.trim();

    if (messageContent !== "") {
        modal.style.display = 'flex'; // Show the modal
        setTimeout(() => {
            modal.style.display = 'none'; // Hide after 1 second
        }, 1000);
    }
};