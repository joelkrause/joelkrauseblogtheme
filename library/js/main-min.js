jQuery(document).ready(function(){jQuery("a").on("click",function(t){if("_blank"!=this.getAttribute("target")){var e=this.getAttribute("href");t.preventDefault(),jQuery(".preloader").removeClass("loaded"),setTimeout(function(){window.location=e},350)}})}),setTimeout(function(){jQuery(".preloader").addClass("loaded")},350),jQuery(document).ready(function(){var t=0;jQuery(".post .date").each(function(){$(this).width()>t&&(t=$(this).width())}),jQuery(".post .date").width(t)});