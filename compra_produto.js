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
   $("a[data-rel='prettyPhoto_SlideShow1[SlideShow1]']").attr('rel', 'prettyPhoto_SlideShow1[SlideShow1]');
   $("a[rel^='prettyPhoto_SlideShow1']").prettyPhoto({theme:'facebook',social_tools:false});
});
