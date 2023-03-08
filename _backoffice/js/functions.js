function goBack(){
    history.back();
}
function showDelete($id) {
    const deleteDiv = document.getElementById('delete-'+$id);
    deleteDiv.style.display = 'block';
    const eraseLink = document.getElementById('erase-'+$id);
    eraseLink.style.display = 'none';
}
function showErase($id) {
    const deleteDiv = document.getElementById('delete-'+$id);
    deleteDiv.style.display = 'none';
    const eraseLink = document.getElementById('erase-'+$id);
    eraseLink.style.display = 'block';
}

function checkText(){
    setTimeout(verifyText,500);
    return false;
}

function verifyText() {
    let textarea = document.getElementById("text_editor");
    if (textarea.value.length == 0) {
        alert("Por favor introduza uma descrição.");
        
    } else{
        document.getElementById("form").submit();
    }
   
}

