function ValidateForm1(theForm)
{
   var regexp;
   if (theForm.Editbox3.value == "")
   {
      alert("Please enter a value for the \"Editbox1\" field.");
      theForm.Editbox3.focus();
      return false;
   }
   return true;
}
