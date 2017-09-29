function Validatecadastro_cliente(theForm)
{
   var regexp;
   if (theForm.Editbox4.value == "")
   {
      alert("Please enter a value for the \"cpf_cliente\" field.");
      theForm.Editbox4.focus();
      return false;
   }
   if (theForm.Editbox3.value == "")
   {
      alert("Please enter a value for the \"rg\" field.");
      theForm.Editbox3.focus();
      return false;
   }
   if (theForm.Editbox5.value == "")
   {
      alert("Please enter a value for the \"telefone\" field.");
      theForm.Editbox5.focus();
      return false;
   }
   if (theForm.Editbox8.value == "")
   {
      alert("Please enter a value for the \"data_cadastro\" field.");
      theForm.Editbox8.focus();
      return false;
   }
   if (theForm.Editbox6.value == "")
   {
      alert("Please enter a value for the \"data_nascimento\" field.");
      theForm.Editbox6.focus();
      return false;
   }
   if (theForm.Editbox22.value == "")
   {
      alert("Please enter a value for the \"celular\" field.");
      theForm.Editbox22.focus();
      return false;
   }
   if (theForm.Editbox10.value == "")
   {
      alert("Please enter a value for the \"endereco1\" field.");
      theForm.Editbox10.focus();
      return false;
   }
   if (theForm.Editbox13.value == "")
   {
      alert("Please enter a value for the \"bairro1\" field.");
      theForm.Editbox13.focus();
      return false;
   }
   if (theForm.Editbox12.value == "")
   {
      alert("Please enter a value for the \"complemento1\" field.");
      theForm.Editbox12.focus();
      return false;
   }
   if (theForm.Editbox11.value == "")
   {
      alert("Please enter a value for the \"numero1\" field.");
      theForm.Editbox11.focus();
      return false;
   }
   if (theForm.Editbox16.value == "")
   {
      alert("Please enter a value for the \"cep1\" field.");
      theForm.Editbox16.focus();
      return false;
   }
   if (theForm.Editbox15.value == "")
   {
      alert("Please enter a value for the \"endereco2\" field.");
      theForm.Editbox15.focus();
      return false;
   }
   if (theForm.Editbox19.value == "")
   {
      alert("Please enter a value for the \"bairro2\" field.");
      theForm.Editbox19.focus();
      return false;
   }
   if (theForm.Editbox18.value == "")
   {
      alert("Please enter a value for the \"complemento2\" field.");
      theForm.Editbox18.focus();
      return false;
   }
   if (theForm.Editbox21.value == "")
   {
      alert("Please enter a value for the \"cep2\" field.");
      theForm.Editbox21.focus();
      return false;
   }
   if (theForm.Editbox2.value == "")
   {
      alert("Please enter a value for the \"nome_cliente\" field.");
      theForm.Editbox2.focus();
      return false;
   }
   if (theForm.Editbox9.value == "")
   {
      alert("Please enter a value for the \"email\" field.");
      theForm.Editbox9.focus();
      return false;
   }
   if (theForm.Editbox1.value == "")
   {
      alert("Please enter a value for the \"senha\" field.");
      theForm.Editbox1.focus();
      return false;
   }
   if (theForm.Editbox1.value.length < 6)
   {
      alert("Please enter at least 6 characters in the \"senha\" field.");
      theForm.Editbox1.focus();
      return false;
   }
   if (theForm.Editbox1.value.length > 20)
   {
      alert("Please enter at most 20 characters in the \"senha\" field.");
      theForm.Editbox1.focus();
      return false;
   }
   if (theForm.Editbox7.value == "")
   {
      alert("Please enter a value for the \"confirmasenha\" field.");
      theForm.Editbox7.focus();
      return false;
   }
   if (theForm.Editbox7.value.length < 6)
   {
      alert("Please enter at least 6 characters in the \"confirmasenha\" field.");
      theForm.Editbox7.focus();
      return false;
   }
   if (theForm.Editbox7.value.length > 20)
   {
      alert("Please enter at most 20 characters in the \"confirmasenha\" field.");
      theForm.Editbox7.focus();
      return false;
   }
   return true;
}
