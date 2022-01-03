function uploadFile(target) {
    document.getElementById("file-name").value = target.files[0].name;
    document.getElementById("ava").style.display = "none";
}

function submitForm(action) {
    var form = document.getElementById('formConfirm');
    form.action = action;
    form.submit();
}

//oninput = 'pic.src=window.URL.createObjectURL(this.files[0]);'
