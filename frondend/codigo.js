
$("#btn").click(function(){
    Swal.fire({
      imageUrl: '/frondend/img/servicios.gif',
        imageHeight: 412,
        imageAlt: 'A tall image',
        title: 'Bienvenido!!',
        text: 'Aquí podrá ver las materias correspondientes a cada carrera, solo debe colocar el mouse sobre la materia y vera un resumen del mismo.\nPara ver el documento completo, solo haga click en la materia.\nGracias!',
        
        animation: false,
        customClass: {
        popup: 'animated bounceIn'
    }
    });
});	

