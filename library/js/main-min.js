jQuery(document).ready(function(){jQuery("a").on("click",function(e){if("_blank"!=this.getAttribute("target")){var t=this.getAttribute("href");e.preventDefault(),jQuery(".preloader").removeClass("loaded"),setTimeout(function(){window.location=t},350)}})}),setTimeout(function(){jQuery(".preloader").addClass("loaded")},350);