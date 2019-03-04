@extends('layouts.app')

@section ('content')
  <div class="registration">
    <div class="container section_1">
      <div class="row">
        <div class="col-12">
          <h1>Sei ad un passo dalla tua nuova professione</h1>
          <p>
            Per assicurare la buona riuscita del corso, ogni candidato deve sostenere
              un breve percorso di selezione. Le due caratteristiche fondamentali per
              essere un perfetto studente Boolean sono la capacità di ragionamento
              critico e la motivazione</p>
        </div>
      </div>
    </div>

  <div class="section_2">
    <div class="container">
      <h2>Contattaci</h2>
      <p>Non è facile prendere la decisione di iniziare il corso Boolean. Lascia la tua email o il tuo numero di telefono per essere ricontattato. Se preferisci chiamaci o lasciaci un messaggio al 02-40031288</p>
      <form action="{{ route('registration.save') }}" method="post">
        @csrf
        @method('POST')
        <div>
          <label for="name">Nome</label>
          <input type="text" name="name" placeholder="Inserisci il tuo nome">
        </div>
        <div>
          <label for="email">Email</label>
          <input type="text" name="email" placeholder="Inserisci il tuo indirizzo Email">
        </div>
        <div>
          <label for="message">Messaggio</label>
          <textarea name="message" placeholder="Inserisci un messaggio"></textarea>
        </div>
        <div>
          <button type="submit">Invia</button>
        </div>
      </form>
    </div>
  </div>
  </div>
@endsection
