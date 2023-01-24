class Datos{
    constructor(nombre, apellido, tel, mail, fecha, horario){
        this._nombre=nombre
        this._apellido=apellido
        this._tel=tel
        this._mail=mail
        this._fecha=fecha
        this._horario=horario
    }
    get nombre(){
        return this._nombre;
    }
    set nombre(nombre){
        this._nombre = nombre;
    }

    get apellido(){
        return this._apellido;
    }
    set apellido(apellido){
        this._apellido = apellido;
    }

    get tel(){
        return this._tel;
    }
    set tel(tel){
        this._tel = tel;
    }

    get mail(){
        return this._mail;
    }
    set mail(mail){
        this._mail = mail;
    }

    /* Estos son de pruebas */
    
    get fecha(){
        return this._fecha;
    }
    set fecha(fecha){
        this._fecha = fecha;
    }

    get horario(){
        return this._horario;
    }
    set horario(horario){
        this._horario = horario;
    }
}

