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
    const trackContainer = document.querySelector(".track-container");

    trackContainer.addEventListener("click", function (event) {
        if (event.target.classList.contains("delete-btn")) {
            const card = event.target.closest(".card");
            card.remove();
        }
    });
});