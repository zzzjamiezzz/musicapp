const fileInput = document.getElementById('file-input');
const trackLabel = document.querySelector('.track-upload-btn');
const trackSmallText = document.querySelector('.track-small-text');

// Create a container for file names (hidden initially)
const fileListContainer = document.createElement('div');
fileListContainer.classList.add('file-list');
fileListContainer.style.display = 'none'; // Hide initially
trackLabel.parentElement.appendChild(fileListContainer);

fileInput.addEventListener('change', function () {
    fileListContainer.innerHTML = ''; // Clear previous file names

    if (fileInput.files.length > 0) {
        trackLabel.textContent = 'Files Selected:'; // Change button text
        trackLabel.classList.add('selected'); // Add a class for styling
        trackSmallText.style.display = 'none';
        fileListContainer.style.display = 'block'; // Show file list

        Array.from(fileInput.files).forEach(file => {
            const fileItem = document.createElement('div');
            fileItem.classList.add('file-item');
            fileItem.textContent = file.name;
            fileListContainer.appendChild(fileItem);
        });
    } else {
        trackLabel.textContent = 'Attachment'; // Reset button text
        trackLabel.classList.remove('selected'); // Remove special styling
        trackSmallText.style.display = 'block';
        fileListContainer.style.display = 'none'; // Hide file list
    }
});


const coverInput = document.getElementById('cover-file-input');
const coverLabel = document.querySelector('.cover-upload-btn');
const coverPreview = document.getElementById('cover-preview');
const coverSmallText = document.querySelector('.cover-small-text'); // Specific small-text for cover upload

coverInput.addEventListener('change', function () {
    if (coverInput.files.length > 0) {
        const file = coverInput.files[0];
        coverLabel.textContent = file.name; // Show the selected file name
        coverSmallText.style.display = 'none'; // Hide the small-text when file is uploaded

        // Create a URL for the selected file and set it as the source for the preview image
        const reader = new FileReader();
        reader.onload = function (e) {
            coverPreview.src = e.target.result; // Set image source to the uploaded file
            coverPreview.style.display = 'block'; // Make the preview image visible
        };
        reader.readAsDataURL(file);
    } else {
        coverLabel.textContent = 'Attachment'; // Revert to placeholder if no file is selected
        coverSmallText.style.display = 'block'; // Show small-text again if no file is selected
        coverPreview.style.display = 'none'; // Hide the preview if no image is selected
    }
});


const albumNameInput = document.querySelector('.album-name-input input');
const trackFileInput = document.getElementById('file-input');
const coverFileInput = document.getElementById('cover-file-input');
const uploadButton = document.getElementById('upload-music-btn');

// Check if all fields are filled
function checkFields() {
    const albumName = albumNameInput.value.trim();
    const trackSelected = trackFileInput.files.length > 0;
    const coverSelected = coverFileInput.files.length > 0;

    if (albumName && trackSelected && coverSelected) {
        uploadButton.disabled = false;
        uploadButton.classList.add('active'); // Enable upload button
    } else {
        uploadButton.disabled = true;
        uploadButton.classList.remove('active'); // Keep disabled
    }
}

// Upload button click event (Redirect to main page)
uploadButton.addEventListener('click', function () {
    if (!uploadButton.disabled) {
        window.location.href = 'artist_main.html'; // Redirect to main page
    }
});

// Event Listeners to check fields
albumNameInput.addEventListener('input', checkFields);
trackFileInput.addEventListener('change', checkFields);
coverFileInput.addEventListener('change', checkFields);