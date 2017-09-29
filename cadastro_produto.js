function Validatecadastro_produto(theForm)
{
   var regexp;
   var extension = theForm.FileUpload1.value.substr(theForm.FileUpload1.value.lastIndexOf('.'));
   if ((extension.toLowerCase() != ".jpeg") &&
       (extension.toLowerCase() != ".png") &&
       (extension != ""))
   {
      alert("The \"imagem_produtos\" field contains an unapproved filename.");
      theForm.FileUpload1.focus();
      return false;
   }
   return true;
}
