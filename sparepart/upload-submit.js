function submitForm() {
    var formData = new FormData(document.getElementById("uploadForm"));
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            showSuccessPopup();
        }
    };
    xhr.open("POST", "upload.php", true);
    xhr.send(formData);
}

function showSuccessPopup() {
    var successPopup = document.getElementById("success-popup");
    successPopup.style.display = "block";

    document.getElementById("part").value = "";
    document.getElementById("area").value = "";
    document.getElementById("sub_area").value = "";
    document.getElementById("desc").value = "";
    document.getElementById("foto").value = "";

    setTimeout(function(){
        successPopup.style.display = "none";
    }, 1000); // Menetapkan waktu timeout dalam milidetik (misalnya 3 detik)
}