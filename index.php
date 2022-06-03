<!DOCTYPE html>
<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="css/style.css" rel="stylesheet">
        <meta charset="UTF-8">
        <title></title>
    
    </head>

    <body>
        <div class="login-popup-wrap new_login_popup">
            <div class="login-popup-heading text-center">        
                <h4><i class="fa fa-lock" aria-hidden="true"></i> Valores</h4> 
                <button type="button" class="btn btn-default login-popup-btn" name="submit" value="1" onclick="addValor2()">Agregar</button>
                <button type="button" class="btn btn-default login-popup-btn" name="submit" value="2" onclick="sumar()">Sumar</button>
                <div class="login-popup-heading text-center">
                    <h4 id="cajas"><i class="fa fa-lock" aria-hidden="true"></i> </h4>
                    <h4 id="resultado"><i class="fa fa-lock" aria-hidden="true"></i> </h4>
                </div>
            </div>
        </div>

        <script>
            a = 0;
            
            function addValor1(){
                a++;

                var div = document.createElement('div');
                div.setAttribute('class', 'form-group');
                    div.innerHTML = '<input id="valor_'+a+'" name="valor_'+a+'" type="number" min="0" step="1" value="0" class="form-control" placeholder="Valor"/>';
                    document.getElementById('cajas').appendChild(div);
            }
            
            function addValor2(){
                a++;

                var div = document.createElement('div');
                div.setAttribute('class', 'form-row');
                div.setAttribute('id','div'+a);
                    div.innerHTML = '<div class="form-group col-md-8"><input id="valor_'+a+'" name="valor_'+a+'" type="number" min="0" step="1" value="0" class="form-control" placeholder="Valor" /></div><div class="form-group col-md-2"><button type="button" class="btn btn-primary btn-sm" onclick="removeValor(div'+a+')">-</button></div>';
                    document.getElementById('cajas').appendChild(div);
            }
            
            function removeValor(elemento){
                document.getElementById('cajas').removeChild(elemento);
            }
    
            function sumar(){
                //var elements = document.getElementsByTagName("input");
                var elements = document.getElementsByClassName("form-control");
                var suma=0;
                for (var i = 0; i < elements.length; i++) {
                    if(elements[i].value != "") {
                        suma+=parseInt(elements[i].value);                        
                    }
                }
                
                document.getElementById("resultado").innerHTML = suma;
            }
            
            
        </script>
    </body>
</html>
