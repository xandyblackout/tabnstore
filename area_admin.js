$(document).ready(function()
{
   $("#PanelMenu1").panel({animate: true, animationDuration: 200, animationEasing: 'linear', dismissible: true, display: 'push', position: 'left', toggle: true});
   $("#PanelMenu1_markup ul li a").click(function(event)
   {
       $.panel.hide($("#PanelMenu1_panel"));
   });
   $("#PanelMenu3").panel({animate: true, animationDuration: 200, animationEasing: 'linear', dismissible: true, display: 'push', position: 'left', toggle: true});
   $("#PanelMenu3_markup ul li a").click(function(event)
   {
       $.panel.hide($("#PanelMenu3_panel"));
   });
});
