function updateSubArea() {
            var areaSelect = document.getElementById("area");
            var areaValue = areaSelect.value;
            console.log(areaValue);
            // Ambil pilihan sub area dari database sesuai dengan area yang dipilih
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var subAreaSelect = document.getElementById("sub_area");
                    subAreaSelect.innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", "get_subarea.php?area=" + areaValue, true);
            xhr.send();
}