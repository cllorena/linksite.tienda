jQuery(document).ready(function(a){if(a("#kurl_users").length>0){var b=a("#kurl_users").val();a("#kusersearch").atwho({at:"",displayTpl:'<li data-value="${name}"><img src="${photo}" width="20px" /> ${name} <small>(${name})</small></li>',limit:5,callbacks:{remoteFilter:function(c,d){a.ajax({url:b,data:{search:c}}).done(function(e){d(e);}).fail(function(){});}}});}if(a("#kunena_search_results").is(":visible")){a("#search").collapse("hide");}if(jQuery.fn.datepicker!==undefined){jQuery("#searchatdate .input-append.date").datepicker({orientation:"top auto",language:"kunena"});}});