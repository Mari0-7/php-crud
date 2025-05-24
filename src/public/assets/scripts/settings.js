document.querySelector('.remove-photo').addEventListener('click', () => {
    document.getElementById('user-photo').src = '/assets/profile.png';
});

document.getElementById('photoInput').addEventListener('change', (e) => {
    const reader = new FileReader();
    reader.onload = () => {
        document.getElementById('user-photo').src = reader.result;
    };
    reader.readAsDataURL(e.target.files[0]);
});