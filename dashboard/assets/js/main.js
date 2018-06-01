$(".alert-dismissible").fadeTo(2000, 500).slideUp(500, function(){
    $(".alert-dismissible").alert('close');
});

$( function() {
    $( "#sortableImageSlider" ).sortable();
    $( "#sortableImageSlider" ).disableSelection();
} );

$( function() {
    $( "#sortableHeaderMenu" ).sortable();
    $( "#sortableHeaderMenu" ).disableSelection();
} );

$( function() {
    $( "#sortableFooterMenu" ).sortable();
    $( "#sortableFooterMenu" ).disableSelection();
} );

$('#viewUserModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var userid = button.data('userid') // Extract info from data-* attributes
    var modal = $(this)

    $.getJSON('./../api/users/get-user.php?user_id='+userid, function(data) {
        $("input[name='user_id']").val(data.user_id)
        $("input[name='username']").val(data.username)
        $("input[name='email']").val(data.email)
        $("input[name='name']").val(data.name)
        $('[name=user_type_id] option').filter(function() { 
            return ($(this).text() == data.user_type_title); //To select Blue
        }).prop('selected', true);
        $("input[name='created_on']").val(data.created_on)
        $("input[name='modified_on']").val(data.modified_on)

    });

});

$('#editUserModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var userid = button.data('userid') // Extract info from data-* attributes
    var modal = $(this)

    $.getJSON('./../api/users/get-user.php?user_id='+userid, function(data) {
	    $("input[name='user_id']").val(data.user_id)
	   	$("input[name='username']").val(data.username)
	    $("input[name='email']").val(data.email)
	    $("input[name='name']").val(data.name)
	    $('[name=user_type_id] option').filter(function() { 
       		return ($(this).text() == data.user_type_title); //To select Blue
    	}).prop('selected', true);
	    
	});

    
});

$('#deleteUserModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var userid = button.data('userid') // Extract info from data-* attributes
    var modal = $(this)
    var input = modal.find('.modal-body input')
    input.val(userid)
});

$('#deleteMenuModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var menuid = button.data('menuid') // Extract info from data-* attributes
    var modal = $(this)
    var input = modal.find('.modal-body input')
    input.val(menuid)
});

$('#viewMenuModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var menuid = button.data('menuid') // Extract info from data-* attributes
    var modal = $(this)

    $.getJSON('./../api/menus/get-menu.php?menu_id='+menuid, function(data) {
        $("input[name='menu_id']").val(data.menu_id)
        $("input[name='menu_name']").val(data.menu_name)
        $("input[name='menu_url']").val(data.menu_url)
        if (data.menu_location == 0) {
            $("input[name='menu_location']").val('Header')    
        } else {
            $("input[name='menu_location']").val('Footer')
        }
        
        
    });

});

$('#editMenuModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var menuid = button.data('menuid') // Extract info from data-* attributes
    var modal = $(this)

    $.getJSON('./../api/menus/get-menu.php?menu_id='+menuid, function(data) {
        $("input[name='menu_id']").val(data.menu_id)
        $("input[name='menu_name']").val(data.menu_name)
        $("input[name='menu_url']").val(data.menu_url)
        if (data.menu_location == 0) {
            $("input[name='menu_location']").val('Header')    
        } else {
            $("input[name='menu_location']").val('Footer')
        }
        
        
    });

});

$('#addMenuModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var menulocation = button.data('menulocation') // Extract info from data-* attributes
    var modal = $(this)
    $("input[name='menu_location']").val(menulocation)
});

$(function() {
  $("#upload_img").on("change", function(){
   var files = !!this.files ? this.files : [];
   if (!files.length || !window.FileReader) return; // Check if File is selected, or no FileReader support
   if (/^image/.test( files[0].type)){ //  Allow only image upload
    var ReaderObj = new FileReader(); // Create instance of the FileReader
    ReaderObj.readAsDataURL(files[0]); // read the file uploaded
    ReaderObj.onloadend = function(){ // set uploaded image data as background of div
    $("#preview_img").css("background-image", "url("+this.result+")");
   }
  }else{
    alert("Upload an image");
  }
 });
});

$('#viewSlideModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var slideid = button.data('slideid') // Extract info from data-* attributes
    var modal = $(this)

    $.getJSON('./../api/slides/get-slide.php?slide_id='+slideid, function(data) {
        $("input[name='slide_id']").val(data.slide_id)
        $("input[name='slide_title']").val(data.slide_title)
    });

});

$('#deleteSlideModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var slideid = button.data('slideid') // Extract info from data-* attributes
    var modal = $(this)
    var input = modal.find('.modal-body input')
    input.val(slideid)
});

$('#editSlideModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var slideid = button.data('slideid') // Extract info from data-* attributes
    var modal = $(this)
    $.getJSON('./../api/slides/get-slide.php?slide_id='+slideid, function(data) {
        $("input[name='slide_id']").val(data.slide_id)
        $("input[name='slide_title']").val(data.slide_title)
    });
});