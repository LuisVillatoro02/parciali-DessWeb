@extends('layout.plantilla')
@section('TituloPagina','TipoCliente Edit')
@section('contenido')
<link rel="stylesheet" href="{{ asset('css/create-customer.css') }}">
        <br><br>
        <center>
        <div class="navigation">
            <ul>

                <li class="list active">
                    <a href="/">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="list">
                    <a href="{{ route('cliente.index') }}">
                        <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                        <span class="text">Customers List</span>
                    </a>
                </li>
            </ul>
        </div>
    </center>
    <div>
        <center><h2><ion-icon name="accessibility-outline"></ion-icon> Edit Customers</h2></center> <br><br>
        <form class="form"action="{{ route('cliente.update', $cliente->id) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="form-group">
                <ion-icon name="person-outline"></ion-icon>
                <label>Name </label>
                <input type="text" name="name" class="form-control" placeholder="Your Name" required  value="{{ $cliente->name }}">
            </div>
            <div class="form-group">
                <ion-icon name="pencil-outline"></ion-icon>
                <label>Address </label>
                <input type="text"name="apellido" class="form-control" placeholder="Your Address" required  value="{{ $cliente->apellido }}">
            </div>
            <div class="form-group">
                <ion-icon name="call-outline"></ion-icon>
                <label>Phone Number</label>
                <input type="text" name="correo"class="form-control" placeholder="Your Phone" required  value="{{ $cliente->correo }}">
            </div>
            <div class="form-group">
                <ion-icon name="pencil-outline"></ion-icon>
                <label>Address </label>
                <input type="number"name="dpi" class="form-control" placeholder="Your Address" required  value="{{ $cliente->dpi }}">
                <small id="emailHelp" class="form-text text-muted">Remember to check the data well.</small>
            </div>
            <div class="form-group">
                <ion-icon name="copy-outline"></ion-icon>
                <label>Client Type </label>
                <select name="id_cliente" class="form-control">
                @foreach ( $datos as $dat )
                    <option value="{{ $dat->id == $cliente->id_cliente }}" selected>{{ $dat->description}}</option>
                @endforeach
            </select>
            </div>
                    <center>
                    <button type="submit" class="btn btn-success"><ion-icon name="checkmark-outline"></ion-icon>Update</button>
                    <button type="reset" style="color: #fff;" class="btn btn-warning"><ion-icon name="trash-outline"></ion-icon>Delete</button>
                    <a class="btn btn-danger" href="{{ route('cliente.index') }}" role="button"><ion-icon name="return-down-back-outline"></ion-icon> Go Back</a>
        </form>
    </div>
    <center>
        <footer>
           <div class="">
             <div class="container text-center">
                 <p class="text-muted mb-0 py-2">© 2022 DesWeb - LuisVillatoro02 All rights reserved.</p>
             </div>
           </div>
         </footer>
   </center>
        <script>
            const list = document.querySelectorAll('.list');
            function activeLink(){
                list.forEach((item) =>
                item.classList.remove('active'));
                this.classList.add('active');
            }
            list.forEach((item) =>
            item.addEventListener('click',activeLink));
        </script>
