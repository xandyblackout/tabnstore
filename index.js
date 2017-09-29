function displaylightbox(url, options)
{
   options.padding = 0;
   options.autoScale = true;
   options.href = url;
   options.type = 'iframe';
   $.fancybox(options);
}
$(document).ready(function()
{
   var giro_promocaoOpts =
   {
      delay: 3000,
      duration: 500,
      easing: 'linear',
      mode: 'forward',
      direction: '',
      pagination: true,
      pagination_img_default: 'images/page_default.png',
      pagination_img_active: 'images/page_active.png',
      start: 2
   };
   $("#giro_promocao").carousel(giro_promocaoOpts);
   $("#giro_promocao_back a").click(function()
   {
      $('#giro_promocao').carousel('prev');
   });
   $("#giro_promocao_next a").click(function()
   {
      $('#giro_promocao').carousel('next');
   });
});
