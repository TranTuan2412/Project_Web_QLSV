var currentLocation = window.location.href;
var url = new URL(currentLocation);
var keySearch = url.searchParams.get("keyword");
$('input.#old-word').val(keySearch);
function showDialog(id){
    document.getElementById('student-'+id).showModal();
}
function closeDialog(id){
    document.getElementById('student-'+id).close();
}