jQuery(document).ready(function($){
    //submit button click event
    function isValidEmail(){
        $email = $('#sideImage input[name="email"]').val();
        if($email.length && $email.indexOf('@') > -1){
            return true;
        }
        return false;

    }

    function isValidName(){
        $name = $('#sideImage input[name="first_name"]').val();
        if($name.length && $name !== ''){
            return true;
        }
        return false;
    }

    function notBotz(){
        $botz = $('#sideImage input[name="a_password"]').val();
        if(!$botz.length || $botz === '' || $botz== undefined || !$botz ){
            return true;
        }
        $('#sideImage input[name="email"]').val('');
        $('#sideImage input[name="first_name"]').val('');
        $('#sideImage input[name="a_password"]').val('');
        return false;
    }
    
    $('.form-submit').click(function(e){
        e.preventDefault();
        formData = $('#sideImage').serialize();
        //  console.log(formData);
        // formData = JSON.stringify(formData);
        
        if(!isValidEmail()){
            alert('add email');
        }else if(!isValidName()){
            alert('add name')
        }else if(!notBotz()){
            alert("no botz please")
        } 
        // else if (!isValidRecaptcha()){
        //     alert("no botz please")
        // }
        else{
            $('#sideImage input[name="email"]').val('');
            $('#sideImage input[name="first_name"]').val('');
            $('#sideImage input[name="a_password"]').val('');
            formSubmit()
        }

    });

    function formSubmit(){
        $.ajax({
            type: 'POST',
            url: '/wp-content/themes/potc-custom/sf-submit.php',
            data: formData,
            success: function (data) {
                
              window.location.href='https://pediatricotcourses.com/thank-you';
            //   console.log(data)
            }
          });
    }


});//end doc ready