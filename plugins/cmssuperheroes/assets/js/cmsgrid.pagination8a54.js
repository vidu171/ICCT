jQuery(document).ready(function(a){"use strict";a(".cms-grid-wraper").each(function(){var b=a(this),c=a(this).attr("id");b.find("a.page-numbers").live("click",function(){b.fadeTo("slow",.3);var d=a(this).attr("href");return jQuery.get(d,function(d){b.html(a(d).find("#"+c).html()),b.fadeTo("slow",1)}),jQuery("audio,video").mediaelementplayer(),!1})})});