document.querySelectorAll('.play-btn').forEach(button => {
    button.addEventListener('click', function () {
        let icon = this.querySelector('i');

        if (icon.classList.contains('fa-play')) {
            icon.classList.remove('fa-play');
            icon.classList.add('fa-pause');
        } else {
            icon.classList.remove('fa-pause');
            icon.classList.add('fa-play');
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const addPlaylistBtn = document.querySelector(".add-playlist-btn");
    const modal = document.getElementById("playlist-modal");
    const overlay = document.getElementById("modal-overlay");
    const closeModalBtn = document.getElementById("close-modal");
    const imageInput = document.getElementById("playlist-image");
    const nameInput = document.getElementById("playlist-name");
    const createBtn = document.getElementById("create-playlist-btn");
    const trackContainer = document.querySelector(".track-container");

    // Open modal
    addPlaylistBtn.addEventListener("click", function () {
        modal.style.display = "block";
        overlay.style.display = "block";
    });

    // Close modal
    closeModalBtn.addEventListener("click", function () {
        modal.style.display = "none";
        overlay.style.display = "none";
        resetForm();
    });

    // Enable/disable create button
    function toggleCreateButton() {
        if (imageInput.files.length > 0 && nameInput.value.trim() !== "") {
            createBtn.classList.add("active");
            createBtn.disabled = false;
        } else {
            createBtn.classList.remove("active");
            createBtn.disabled = true;
        }
    }

    imageInput.addEventListener("change", toggleCreateButton);
    nameInput.addEventListener("input", toggleCreateButton);

    // Create playlist
    createBtn.addEventListener("click", function () {
        if (imageInput.files.length > 0 && nameInput.value.trim() !== "") {
            const reader = new FileReader();
            reader.onload = function (e) {
                const newCard = document.createElement("div");
                newCard.classList.add("card");
                newCard.innerHTML = `
                    <div class="image-container">
                        <img src="${e.target.result}" alt="${nameInput.value}">
                        <div class="play-button">
                            <button class="play-btn">
                                <i class="fa fa-play"></i>
                            </button>
                        </div>
                    </div>
                    <div class="music-title">${nameInput.value}</div>
                    <div class="artist">By You</div>
                `;
                trackContainer.appendChild(newCard);
                closeModal();
            };
            reader.readAsDataURL(imageInput.files[0]);
        }
    });

    // Close modal and reset form
    function closeModal() {
        modal.style.display = "none";
        overlay.style.display = "none";
        resetForm();
    }

    // Reset form
    function resetForm() {
        imageInput.value = "";
        nameInput.value = "";
        createBtn.classList.remove("active");
        createBtn.disabled = true;
    }
});


document.addEventListener("DOMContentLoaded", function () {
    const trackContainer = document.querySelector(".track-container");

    trackContainer.addEventListener("click", function (event) {
        if (event.target.classList.contains("delete-btn")) {
            const card = event.target.closest(".card");
            card.remove();
        }
    });
});