jQuery(document).ready(function($){$('.form-submit').click(function(e){e.preventDefault();formData=$('#1xq8nm').serialize();console.log(formData);});function formSubmit(){$.ajax({type:'POST',url:'ml-submit.php',data:$('form').serialize(),success:function(){alert('form was submitted');}});}});