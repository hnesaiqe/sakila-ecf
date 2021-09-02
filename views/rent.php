<?php 
include '../function.php';
require '../helpers/database.php';
require '../views/partials/head.php';
require '../classes/Category.php';
require '../views/partials/navbar.php';
require '../classes/Film.php';
require '../classes/Actor.php'; 
require '../classes/Language.php'; 
?>
<form action="" method="get">
    
</form>

<button type="button btn_add" id="add">Add Other Members</button>
<div id="dynamic_field"></div>
<button type="button" class="btn_remove hidden">Remove last</button>
<span></span>

<script>
    // test jQuery$(document).ready(function () {
    var i = 1;
    $('#add').click(function () {
            if (i <= 5) {
                console.log(i);
                $('#dynamic_field').append(
                    '<span id="row'+i+'" >'+
                        '<div class="col-12">'+
                            '<div class=" my-1">'+
                                '<div class = "col-md-12" >'+
                                    '<div class = "col-md-12  align-items-center d-md-flex" >'+
                                        '<div class = "col-md-4 p-2 rounded mb-1 mb-md-0" style = "background-color:#2e4f9b; color:white">'+
                                            '<label for = "inputLastName" class = "form-label m-0 fs-6" >DÉBUT DE L ABSENCE</label>'+ 
                                        '</div>'+
                                        '<div class = "col-md-4">'+
                                            '<input type = "date" id = "dayNow" class = "form-control" name = "date_start" onclick = "datnow();" value = "" require = "">'+
                                        '</div>'+
                                        '<div class = "col-md-4">'+
                                            '<div class = "input-group ">'+
                                                '<select class = "form-select" id = "inputGroupSelect01" name = "idmotif_start">'+
                                                '<option value="2">Matin</option>'+
                                                '<option value="3">Après-midi </option>'+
                                                '</select>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '<div class="row my-1 d-flex">'+
                                '<div class="col-md-12">'+
                                    '<div class="col-md-12  align-items-center d-md-flex">'+
                                        '<div class="col-md-4 p-2 rounded mb-1 mb-md-0" style="background-color:#2e4f9b; color:white">'+
                                            '<label for="inputLastName" class="form-label m-0">FIN DE L ABSENCE</label>'+
                                        '</div>'+
                                        '<div class="col-md-4">'+
                                            '<input type="date" class="form-control" name="date_end" width="100%" require="">'+
                                        '</div>'+
                                        '<div class="col-md-4">'+
                                            '<div class="input-group ">'+
                                                '<select class="form-select"  name="idmotif_end">'+
                                                    '<option value="2">Matin</option>'+
                                                    '<option value="3">Après-midi </option>'+
                                                '</select>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+							
                    '</span>'
                )
				if (i==5) {
					console.log(i);
					$('.btn_add').addClass('hidden');
				  } else {
					$('.btn_add').removeClass('hidden');

				  }
                i++;
                $('.btn_remove').removeClass('hidden');
            }
    });
    $(document).on('click', '.btn_remove', function() {
          i--;
          $('#row' + $('#dynamic_field span').length).remove();
          if (i<=1) {
            $('.btn_remove').addClass('hidden');
          }else {
			$('.btn_add').removeClass('hidden');
		  }       

        });
    
</script>

<?php include '../views/partials/footer.php';?>