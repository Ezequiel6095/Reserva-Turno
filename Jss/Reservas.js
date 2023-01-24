class Reservas extends Datos{
    static contadorReservas = 0;

    constructor(nombre, apellido, tel, mail, fecha, horario){
        super(nombre,apellido,tel,mail,fecha,horario);
        this._id = ++Reservas.contadorReservas;
    }
    get id(){
        return this._id;
    }
}


