require('./bootstrap');
const $ = require ('jquery');
$(document).ready(function(){

    $('#cerca').click(function(){
        var name= $('#nome').val();
        var eta= $('#eta').val();
        var azienda= $('#azienda').val();
        var ruolo= $('#ruolo').val();
        var genere= $('#genere').val();
    
        var data= {
            'nome': name,
            'eta': eta,
            'azienda': azienda,
            'ruolo': ruolo,
            'genere': genere
        };

        for (const key in data) {
            if (data[key].length == 0) {
                delete data[key];
                
            }
        }
        console.log(data);
        

        $.ajax ({
            'url' : "http://127.0.0.1:8000/api/studentsapi/filter",
            'method' : "POST",
            'data' : data,
            'success': function(data){
                console.log(data);
            },
            'error': function(){
                console.log('error');
                
            }
        })
    });
  
});
