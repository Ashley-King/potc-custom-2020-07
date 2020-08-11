jQuery(document).ready(function($){
    //submit button click event
    function isValidEmail($form){
        $email = $($form).find('input[name="email"]').val();
        if($email.length && $email.indexOf('@') > -1){
            return true;
        }
        return false;

    }

    function isValidName($form){
        $name = $($form).find('input[name="first_name"]').val();
        if($name.length && $name !== ''){
            return true;
        }
        return false;
    }

    function notBotz($form){
        $botz = $($form).find('input[name="license"]').val();
        if(!$botz.length || $botz === '' || $botz== undefined || !$botz ){
            return true;
        }
        $($form).find('input[name="first_name"]').val('');
        $($form).find('input[name="email"]').val('');
        $($form).find('input[name="license"]').val('');
        return false;
    }
    
    $('.form-submit').click(function(e){
        e.preventDefault();
        $form = $(this).parents('form').attr('id');
        $form_id = '#' + $form;
        formData = $($form_id).serialize();
        //  console.log(formData);
        // formData = JSON.stringify(formData);
        
        if(!isValidEmail($form_id)){
            alert('add email');
        }else if(!isValidName($form_id)){
            alert('add name')
        }else if(!notBotz($form_id)){
            alert("no botz please")
        } 
        
        else{
            $($form_id).find('input[name="first_name"]').val('');
            $($form_id).find('input[name="email"]').val('');
            $($form_id).find('input[name="license"]').val('');
            
            formSubmit()
        }

    });

    function formSubmit(){
        $.ajax({
            type: 'POST',
            url: '/wp-content/themes/potc-custom/sf-submit.php',
            data: formData,
            success: function (data) {
           location.href = 'https://pediatricotcourses.com/thank-you';
            //   console.log(data)
            },
            error: function(err){
                
                console.log(err);
                location.href = 'https://pediatricotcourses.com/thank-you';
            }
          });
    }


});//end doc ready