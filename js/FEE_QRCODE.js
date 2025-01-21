  // Toggle QR Code visibility and hide the button after it's clicked
  function toggleQR() {
      const qrContainer = document.getElementById('qrContainer');
      const showQRButton = document.getElementById('showQRButton');
      
      if (qrContainer.style.display === 'none' || qrContainer.style.display === '') {
          qrContainer.style.display = 'block';
          showQRButton.style.display = 'none'; // Hide the button
          qrContainer.style.animation = 'fadeIn 0.5s ease-in-out';
      } else {
          qrContainer.style.display = 'none';
          showQRButton.style.display = 'block'; // Show the button if QR code is hidden
      }
  }

