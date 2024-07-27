document.getElementById('btn_image1').style.display = 'none';
document.getElementById('btn_image2').style.display = 'none';
document.getElementById('btn_image3').style.display = 'none';
document.getElementById('btn_image4').style.display = 'none';
document.getElementById('btn_image5').style.display = 'none';
document.getElementById('btn_image6').style.display = 'none';

document.getElementById('image1').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('imagePreview1').src = e.target.result;
            document.getElementById('btn_image1').style.display = 'block';
            document.getElementById('image1').style.display = 'none';
        }
        reader.readAsDataURL(file);
    }
});

document.getElementById('btn_image1').addEventListener('click', function() {
    document.getElementById('imagePreview1').src = ''; // Reset to default image or clear it
    document.getElementById('image1').value = ''; // Clear the file input value
    document.getElementById('btn_image1').style.display = 'none'; // Hide the remove button
    document.getElementById('image1').style.display = 'block';
});

document.getElementById('image2').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('imagePreview2').src = e.target.result;
            document.getElementById('btn_image2').style.display = 'block';
            document.getElementById('image2').style.display = 'none';
        }
        reader.readAsDataURL(file);
    }
});

document.getElementById('btn_image2').addEventListener('click', function() {
    document.getElementById('imagePreview2').src = ''; // Reset to default image or clear it
    document.getElementById('image2').value = ''; // Clear the file input value
    document.getElementById('btn_image2').style.display = 'none'; // Hide the remove button
    document.getElementById('image2').style.display = 'block';
});

document.getElementById('image3').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('imagePreview3').src = e.target.result;
            document.getElementById('btn_image3').style.display = 'block';
            document.getElementById('image3').style.display = 'none';
        }
        reader.readAsDataURL(file);
    }
});

document.getElementById('btn_image3').addEventListener('click', function() {
    document.getElementById('imagePreview3').src = ''; // Reset to default image or clear it
    document.getElementById('image3').value = ''; // Clear the file input value
    document.getElementById('btn_image3').style.display = 'none'; // Hide the remove button
    document.getElementById('image3').style.display = 'block';
});

document.getElementById('image4').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('imagePreview4').src = e.target.result;
            document.getElementById('btn_image4').style.display = 'block';
            document.getElementById('image4').style.display = 'none';
        }
        reader.readAsDataURL(file);
    }
});

document.getElementById('btn_image4').addEventListener('click', function() {
    document.getElementById('imagePreview4').src = ''; // Reset to default image or clear it
    document.getElementById('image4').value = ''; // Clear the file input value
    document.getElementById('btn_image4').style.display = 'none'; // Hide the remove button
    document.getElementById('image4').style.display = 'block';
});

document.getElementById('image5').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('imagePreview5').src = e.target.result;
            document.getElementById('btn_image5').style.display = 'block';
            document.getElementById('image5').style.display = 'none';
        }
        reader.readAsDataURL(file);
    }
});

document.getElementById('btn_image5').addEventListener('click', function() {
    document.getElementById('imagePreview5').src = ''; // Reset to default image or clear it
    document.getElementById('image5').value = ''; // Clear the file input value
    document.getElementById('btn_image5').style.display = 'none'; // Hide the remove button
    document.getElementById('image5').style.display = 'block';
});

document.getElementById('image6').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('imagePreview6').src = e.target.result;
            document.getElementById('btn_image6').style.display = 'block';
            document.getElementById('image6').style.display = 'none';
        }
        reader.readAsDataURL(file);
    }
});

document.getElementById('btn_image6').addEventListener('click', function() {
    document.getElementById('imagePreview6').src = ''; // Reset to default image or clear it
    document.getElementById('image6').value = ''; // Clear the file input value
    document.getElementById('btn_image6').style.display = 'none'; // Hide the remove button
    document.getElementById('image6').style.display = 'block';
});
