$(document).ready(function() {

    $("a.toggle").unbind("change");
    $("a.toggle").click(function(){
        var p = this.firstChild;
        if (p.src.match('icon_1.png')) {
            $(p).attr({ src: "/img/icon_0.png", alt: "Activate" });
        } else {
            $(p).attr("src", "/img/icon_1.png");
            $(p).attr("alt","Deactivate");
        };
        $.get(this.href + "?" + new Date().getTime() );
        return false;
    });
	$(".delete-attachment").click(function(){
      $.ajax({url: window.location.origin + '/admin/products/delete_attachment/' + $(".delete-attachment").attr("attr-id"), success: function(result){
		alert(result);
		location.reload();
	  }});
    });

});
