 const reserva = [
];  


/* nombre,tel,mail,fecha,horario */
 

 let agregarDato = () => {
    let form = document.forms['form'];

    let nombre = form['input_nombre'] 
    
    let apellido = form['input_apellido']
    
    let tel = form['input_Cel']
    
    let mail = form['input_email']
    
    let fecha = form['input_date']
    
    let horario = form['input_time']
    
    reserva.push(new Reservas(nombre.value, apellido.value,  tel.value,  mail.value,  fecha.value,  horario.value));
    console.log(reserva[0])
}


