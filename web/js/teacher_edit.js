function uploadFile(target) {
    document.getElementById("file-name").value = target.files[0].name;
    document.getElementById("ava").style.display = "none";
}
