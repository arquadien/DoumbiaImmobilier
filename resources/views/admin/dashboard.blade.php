@extends('admin.layout.app')
@section('content')
<div class="users">
  <div class="card">
    <h4>Nombre de visiteurs</h4>
    <p>Par année</p>
    <div class="per">
      <h2>200</h2>
    </div>
    <button>Profile</button>
  </div>
  <div class="card">
    <h4>Nombres de propriétés</h4>
    <p>disponible</p>
    <div class="per">
      <h2>200</h2>
    </div>
    <button>Profile</button>
  </div>
  <div class="card">
    <h4>Nombres de propriétés</h4>
    <p>Vendus</p>
    <div class="per">
      <h2>200</h2>
    </div>
    <button>Profile</button>
  </div>
</div>

<section class="attendance">
  <div class="attendance-list">
    <h1>Liste des propriétés disponible</h1>
    <table class="table">
      <thead>
        <tr>
          <th width="6%">ID</th>
          <th width="34%">Name</th>
          <th width="50%">Description</th>
          <th width="5%">Details</th>
          <th width="5%">Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach($proprietes as $propriete)
        <tr>
          <td>{{ $propriete->id }}</td>
          <td>{{ $propriete->titre }}</td>
          <td>{{ $propriete->description }}</td>
          <td><button><p><a href="{{asset(route('detail',$propriete->id))}}" style="color:black; width:12px" >View</a></p></button></td>
          <td><button>Vendus</button></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection