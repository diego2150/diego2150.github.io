function validar(){
  var psw1=document.getElementById('psw1').value;
  var psw2=document.getElementById('psw2').value;

  if(psw1!==psw2){
    alert('LAS CONTRASEÑAS NO COINCIDEN');
    document.getElementById('psw2').value="";
    document.getElementById('psw2').focus();
    return false;
  }
}
