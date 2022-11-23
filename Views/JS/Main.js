function asignar(){
    var estudiante = $('#estudiante').val();
    
   var curso = $('#curso').val();
   var url = '../bd/transactions.php';
   var parametros = {
                "curso" : curso,
                "estudiante" : estudiante,
                
        };
   
   
   $.ajax({
       data: parametros, //datos que se envian a traves de ajax
       url: url, //archivo que recibe la peticion
       type:  'post', //método de envio
       beforeSend: function () {
         
       },
       success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            window.location.href = "contenido.php";
                }
        });
    
 
};

function del_data (id_cu) {
   
   var id_cu = id_cu;
   var tipo = 'delete';
   var url = '../bd/transactions.php';
   var parametros = {
                "id_cu" : id_cu
        };
   
   $.ajax({
       data: parametros, //datos que se envian a traves de ajax
       url: url, //archivo que recibe la peticion
       type:  'post', //método de envio
       beforeSend: function () {
         
       },
       success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
             window.location.href = "contenido.php";
                }
        });
}
