<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 

    <title>Facturacion e inventario</title>
  <link rel="stylesheet" href="validar/bootstrap.css"/>


    <script type="text/javascript" src="validar/jquery.min.js"></script>
    <script type="text/javascript" src="validar/bootstrap.min.js"></script>
    <script type="text/javascript" src="validar/formValidation.js"></script>
    <script type="text/javascript" src="validar/bootstrap.js"></script>
</head>


<style>


#footer {
   position: relative;
   margin-top: -50px; /* Misma altura que el footer en negativo */
   height: 100px; /* Altura del footer */
   clear: both;
   background-color:black;
}
label.positive{
    color: green;
}

#vanis{
 
}

ul{
    color: #555
}

ul li{
    list-style: none;
}


label.negative{
    color: #953131;
}
</style> 








<body>




 





<div class="contenedor">


   
   

	
	
	
	
	
	
	 <div class="container">
        <div class="row">
		
		
		 <div id="formulario">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="page-header">
                    <center><h2>FACTURACION E INVENTARIO</h2></center>
                </div>

                <form method="POST" action="return false" onsubmit="return false"
				
				
				
                    <div class="panel-group" id="steps">
                        <!-- Step 1 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#steps" href="#stepOne">INICIO DE SESION</a></h4>
                            </div>
                            <div id="stepOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Nombre de Usuario</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="user" id="user" />
                                        </div>
                                    </div>

                                  

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Contraseña</label>
                                        <div class="col-lg-5">
                                            <input type="password" class="form-control" name="pass" id="pass" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2 -->
                       

                        <!-- Step 3 -->
                       	        <button  onclick="Validar(document.getElementById('user').value, document.getElementById('pass').value);"  class="btn btn-success" style="width:100%" >ENTRAR</button></p>
                    </div>
                </form>
            </div>
        </div>
		
		
		
		
		
		<div id="resultado" class="alert alert-danger" style="display:none;"></div>
    </div>
</div></BR>
<center><h1>NO TIENES CUENTA CREA UNA</H1></CENTER>




 


 


 
 
 
 
 
 
      

       

   
  
   

<!-- Next line for Pinterest -->
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
<script>
$(document).ready(function(){
    $("input").keyup(function(){
        var thiss = $(this);
        var value = thiss.val(); 
        $.get("vistas/check.php",{value:value},function(data){
            thiss.parent('#nav').siblings('#nav').html(data);
        });
    });
});










</script>
    
 
  
 
  
  
  
  
  
  
  
  
  
  

  
  


















    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                
                </div>

                <form id="defaultForm" method="post" class="form-horizontal" action="vistas/base.php"
                    						  data-fv-message="This value is not valid"
						  
						
						  data-fv-icon-validating="glyphicon glyphicon-refresh"   >
						  
						  
						  
						  
						  
						  
        <div class="form-group" >
		
		   <label class="col-sm-3 control-label">nombre de usuario</label>
		   
		    <div class="col-sm-5" id="nav">
            
              <LI><input  name="username"type="text" id="username" autocomplete="off" class="form-control" />
              <li></li>
           
			</div>
		
        </div>
						  
						  
						     <div class="form-group">
   <label class="col-sm-3 control-label">contraseña</label>
                        <div class="col-sm-5">
                            <input type="password" class="form-control" name="password"
                                   required data-fv-notempty-message="The password is required and cannot be empty"
                                   data-fv-different="true" data-fv-different-field="username" data-fv-different-message="The password cannot be the same as username" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">confirmar contraseña </label>
                        <div class="col-sm-5">
                            <input type="password" class="form-control" name="confirmPassword"
                                   required data-fv-notempty-message="la confirmacion de contrasña es obligatoria"
                                   data-fv-identical="true" data-fv-identical-field="password" data-fv-identical-message="la contraseña no es la misma" />
                        </div>
                    </div>
					
					
					
					


             

                    <div class="form-group">
                        <label class="col-sm-3 control-label">correo electronico</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="email" />
                        </div>
                    </div>

  
  <div class="form-group">
                    <label class="col-sm-3 control-label">telefono</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="phone" />
                    </div>

                </div>
  
  
  
   
  <div class="form-group">
                    <label class="col-sm-3 control-label">celular</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="celular" />
                    </div>

                </div>
  
  
  
  
  
  
  
                    <div class="form-group">
                        <label class="col-sm-3 control-label">nombre factura</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nomfactura" />
                        </div>
                    </div>

					
					
					 <div class="form-group">
                        <label class="col-sm-3 control-label">direccion</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="direccion" />
                        </div>
                    </div>

					
					
					
					
                   <!-- <div class="form-group">
                        <label class="col-sm-3 control-label">Gender</label>
                        <div class="col-sm-6">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="male" /> Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="female" /> Female
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="other" /> Other
                                </label>
                            </div>
                        </div>
                    </div>-->
					
					
					
					 <div class="form-group">
                                <label class="col-sm-3 control-label">pais</label>
                                <div class="col-sm-5">
                                    <select class="form-control" name="pais">
                                      
                                          <option value="0.16" selected >Colombia</option>  
                      
                      <option value="0.21" >España</option>  
                      <option value="0.19">chile</option>  
                      
                      <option value="0.18">peru</option>  
                  
                      <option value="0.07">Panamá</option>  
                      
                      <option value="0.12">ecuador</option>  
                   
                      <option value="0.22">uruguai</option>  
                      
                      <option value="0.12">Venezuela</option>  
					  
					  
					  <option value="0.15">Honduras</option>  
                  
                      <option value="0.15">Nicaragua</option>  
                      
                      <option value="0.12">Guatemala</option>  
                   
                      <option value="0.13">Costa rica</option>  
                      
                      <option value="0.21">Argentina</option>  
					  
					  
					  
					  
					  
					  
					  <option value="0.13">el salvador</option>  
                  
                      <option value="0.10">paraguay</option>  
                      
                    
                                    </select>
                                </div>
                            </div>
							
							
							
							

                    <div class="form-group">
                        <label class="col-sm-3 control-label" id="captchaOperation"></label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="captcha" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="agree" value="agree" /> aceptar terminos y condiciones
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Rejistrarse</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
	
	
	
	

<script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#defaultForm').formValidation({
		
		
		
		
		
           
			
			
		
		
		
		
		
		
        message: 'This value is not valid',
        icon: {
          
        },
        fields: {
			
			
			
			
			 celular: {
                        message: 'el numero de celular no es valido',
                        validators: {
                            notEmpty: {
                                message: 'el numero de celular es obligatorio'
                            },
							
							
							
					
					 stringLength: {
                        min: 5,
                        max: 20,
                        message: 'el celular  debe tener como minimo 5 numeros y  un maximo de 20 numeros'
                    },
                            digits: {
                                message: 'solo puede dijitar numeros'
                            }
							
                        }
                    },
			
                    phone: {
                        message: 'el numero de telefono no es valido',
                        validators: {
                            notEmpty: {
                                message: 'el numero de telefono es obligatorio'
                            },
							
							
							
					
					 stringLength: {
                        min: 5,
                        max: 20,
                        message: 'el telefono  debe tener como minimo 5 numeros y  un maximo de 20 numeros'
                    },
					
                            digits: {
                                message: 'solo puede dijitar numeros'
                            }
                        }
                    },
            direccion: {
                
                validators: {
                    notEmpty: {
                        message: 'la direccion es requeridad'
                    },
					
					 stringLength: {
                        min: 6,
                        max: 30,
                        message: 'la direccion debe tener como minimo 6 letras y hasta un maximo de 30 letras'
                    }
					
					
					
					
					
                }
            },
            nomfactura: {
                
                validators: {
                    notEmpty: {
                        message: 'The last name is required'
                    }
					
					
					,
                    stringLength: {
                        min: 6,
                        max: 25,
                        message: 'el titulo de factura debe tener como minimo 6 letras hasta un maximo de 25 letras'
                    }
                    
					
					
					
					
					
					
					
					
					
                }
            },
            username: {
                message: 'el nombre de usuario no es valido',
                validators: {
                    notEmpty: {
                        message: 'el nombre de usuario es obligatorio'
                    },
                    stringLength: {
                        min: 6,
                        max: 20,
                        message: 'el mombre de usuario debe tener como minimo 6 letras hasta un maximo de 20 letras'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
						
                        message: 'solo puede dijitar letras y numeros el resto de caracteres es prohibido'
                    },
					
					
					
					
					regexp: {
                        regexp: /^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)$/,
						
                        message: 'debe tener por lo menos 1 unumero y una letra'
                    }
					
					
                }
            },
		
            email: {
                validators: {
                    notEmpty: {
                        message: 'el correo es requerido'
                    },
							
							
							
					
					 stringLength: {
                        min: 5,
                        max: 25,
                        message: 'el correo  debe tener como minimo 5 caracteres y  un maximo de 25 caracteres'
                    },
                    emailAddress: {
                        message: 'esto no es un correo'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'la contraseña es requerida'
                    },
					
					
					 stringLength: {
                        min: 6,
                        max: 20,
                        message: 'la  contraseña debe tener como minimo 6 letras o numeros y hasta un maximo de 20 letras o numeros '
                    },
					 regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'la contraseña solo puede ser numeros o letras '
                    },
					
					
					
					
					
					
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'respuesta equibocada',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
            agree: {
                validators: {
                    notEmpty: {
                        message: 'debes aceptar los terminos y las condiciones '
                    }
                }
            }
        }
    });
});





$(document).ready(function(){
    $("input").keyup(function(){
        var thiss = $(this);
        var value = thiss.val(); 
        $.get("vistas/check.php",{value:value},function(data){
            thiss.parent('li').siblings('li').html(data);
        });
    });
});




   
		
		
		
		
		
		
		function Validar(user, pass)
        {
            $.ajax({
                url: "vistas/validar.php",
                type: "POST",
                data: "user="+user+"&pass="+pass,
                success: function(resp){
                    $('#resultado').html(resp).show(200).delay(2500).hide(200);
                }        
            });
        }
		


	$(document).keydown(function(objEvent) {
    if (objEvent.keyCode == 9) {  //tab pressed
        objEvent.preventDefault(); // stops its action
    }
})	
		




		
		
</script>


<div id="footer">
<center><p style="color: #FFFFFF">Contactanos  correo: javasoftcolombia@gmail.com </p> </center>
<center><p style="color: #FFFFFF">  telefono: 3044873927     </p> </center>
<center><p style="color: #FFFFFF">  what up: +57 3044873927     </p> </center>

</div>

</body>
</html>