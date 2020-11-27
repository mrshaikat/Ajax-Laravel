(function($){
$(document).ready(function(){

    $('input#student_photo').change(function(e){

    let file_url =  URL.createObjectURL(e.target.files[0]);
    
    $('img#student_photo_load').attr('src', file_url);
    });

    $('table#student_table').DataTable();


    //All student show

    function allStudent(){
        $.ajax({
            url : 'student-all' ,
            success : function(data){
                $('tbody#student_tbody').html(data);
            }
        });
    }
    allStudent();

    //Add new Student

    $(document).on('submit','form#add_student_data',function(e){
        e.preventDefault();

        let name = $('form#add_student_data input[name="name"]').val();
        let roll = $('form#add_student_data input[name="roll"]').val();
        let email = $('form#add_student_data input[name="email"]').val();
        let cell = $('form#add_student_data input[name="cell"]').val();

        if( name == '' || roll == '' || email =='' || cell==''){
            $('.mess').html('<p class="alert alert-danger text-center">All fields are required <button class="close" data-dismiss="alert">&times;</button> </p>');
        }else if(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email) == false){

            $('.mess').html('<p class="alert alert-danger text-center">Invaid E-mail Address <button class="close" data-dismiss="alert">&times;</button> </p>');

        }else{
            $.ajax({
                url : 'student-create',
                method : "POST",
                contentType : false,
                processData: false,
                data : new FormData(this),
                success: function(data){
                    $('.mess').html('<p class="alert alert-success text-center">Student Added Successfull <button class="close" data-dismiss="alert">&times;</button> </p>');

                    $('form#add_student_data')[0].reset();
                    $('img#student_photo_load').attr('src', '');

                    allStudent();
                }
            });
        }
       
    });

    //Student Edit

    $(document).on('click', 'a#edit_student',function(e){
        e.preventDefault();
        let id = $(this).attr('studen_id');

        $.ajax({
            url : 'student-edit/' + id,
            dataType : "json",
            success : function(data){
                
                $("#student-model-edit input[name = 'name']").val(data.name);
                $("#student-model-edit input[name = 'roll']").val(data.roll);
                $("#student-model-edit input[name = 'email']").val(data.email);
                $("#student-model-edit input[name = 'cell']").val(data.cell);
                $("#student-model-edit img").attr('src','media/student/' + data.photo);
            }
        });
    });


});
})(jQuery)