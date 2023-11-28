function openAddPopUp() {
    document.getElementById('addPopUp').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
}

function openUpdatePopUp() {
    document.getElementById('updatePopUp').style.display = 'block';
    document.getElementById('overlay-update').style.display = 'block';
}

function closeAddPopUp() {
    document.getElementById('addPopUp').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
}

function closeUpdatePopUp() {
    window.location.href = "http://localhost:8000/admin-panel";
}

function validateForm() {
    var fileInput = document.getElementById('Cover');
    var errorMessage1 = document.getElementById('errorMessage1');
    if (fileInput.files.length === 0) {
        errorMessage1.textContent = 'Please select an image.';
        return false;
    }
    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
    var fileName = fileInput.files[0].name;
    if (!allowedExtensions.exec(fileName)) {
        errorMessage1.textContent = 'Please select a valid image file (jpg, jpeg, png).';
        return false;
    }
    errorMessage1.textContent = '';

    var genreNameInput = document.getElementsByName('GenreName')[0];
    var errorMessage2 = document.getElementById('errorMessage2');
    if (genreNameInput.value.trim() === '') {
        errorMessage2.textContent = 'Genre Name is required.';
        return false;
    }
    if (genreNameInput.value.length > 255) {
        errorMessage2.textContent = 'Genre Name cannot exceed 255 characters.';
        return false;
    }
    errorMessage2.textContent = '';

    var titleInput = document.getElementsByName('Title')[0];
    var errorMessage3 = document.getElementById('errorMessage3');
    if (titleInput.value.trim() === '') {
        errorMessage3.textContent = 'Title is required.';
        return false;
    }
    if (titleInput.value.length > 255) {
        errorMessage3.textContent = 'Title cannot exceed 255 characters.';
        return false;
    }
    errorMessage3.textContent = '';

    var directorInput = document.getElementsByName('Director')[0];
    var errorMessage4 = document.getElementById('errorMessage4');
    if (directorInput.value.trim() === '') {
        errorMessage4.textContent = 'Director is required.';
        return false;
    }
    if (directorInput.value.length > 255) {
        errorMessage4.textContent = 'Director cannot exceed 255 characters.';
        return false;
    }
    errorMessage4.textContent = '';

    var durationInput = document.getElementsByName('Duration')[0];
    var errorMessage5 = document.getElementById('errorMessage5');
    if (isNaN(durationInput.value) || durationInput.value < 1) {
        errorMessage5.textContent = 'Please enter a valid duration (minimum is 1).';
        return false;
    }
    errorMessage5.textContent = '';

    var ratingInput = document.getElementsByName('Rating')[0];
    var errorMessage6 = document.getElementById('errorMessage6');
    if (isNaN(ratingInput.value) || ratingInput.value < 1 || ratingInput.value > 5) {
        errorMessage6.textContent = 'Please enter a valid rating between 1 and 5.';
        return false;
    }
    errorMessage6.textContent = '';

    var descriptionInput = document.getElementsByName('Description')[0];
    var errorMessage7 = document.getElementById('errorMessage7');
    if (descriptionInput.value.trim() === '') {
        errorMessage7.textContent = 'Description is required.';
        return false;
    }
    if (descriptionInput.value.length > 255) {
        errorMessage7.textContent = 'Description cannot exceed 255 characters.';
        return false;
    }
    errorMessage7.textContent = '';

    var releaseDateInput = document.getElementsByName('ReleaseDate')[0];
    var errorMessage8 = document.getElementById('errorMessage8');
    if (releaseDateInput.value.trim() === '') {
        errorMessage8.textContent = 'Release Date is required.';
        return false;
    }
    errorMessage8.textContent = '';

    document.getElementById('addPopUp').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
    return true;
}

document.querySelector('.submit-btn').addEventListener('submit', (e)=>{
    e.preventDefault();
})