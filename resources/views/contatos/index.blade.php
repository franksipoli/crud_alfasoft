
@include('contatos.header')


<?php
    // Alertas
    if ( isset($_GET['add']) ) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>New contact added!</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    elseif ( isset($_GET['delete']) ) {
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Contact deleted.</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    elseif ( isset($_GET['edit']) ) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Contact updated.</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    elseif ( isset($_GET['error']) ) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>An error has occurred.</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
?>

  <div class="pb-2 mb-4 border-bottom sticky-top row align-items-center">
    <div class="col">

      <h1 class="h2">Contacts</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">All</li>
        </ol>
      </nav>
    </div>
    <div class="col d-flex justify-content-end">
      <a href="./novo" class="btn btn-primary"><i class="bi bi-person-plus-fill me-2"></i> New contact</a>
    </div>
  </div>


  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col"># ID</th>
        <th scope="col">Name</th>
        <th scope="col">Telephone</th>
        <th scope="col">E-mail</th>
        <th scope="col">Actions</th>
    </thead>

    <tbody>
      @forelse ($contatos as $contato)
      <tr class="align-middle">
        <th scope="row" class="user-id">{{ $contato->id }}</th>
        <td><a href="editar/{{ $contato->id }}" class="text-decoration-none">{{ $contato->nome }}</a></td>
        <td>{{ $contato->contato }}</td>
        <td>{{ $contato->email }}</td>
        <td>
          <a href="editar/{{ $contato->id }}" class="btn btn-outline-secondary btn-sm"><i class="bi bi-pencil-fill"></i></a>
          <a data-user-name="{{ $contato->nome }}" data-user-id="{{ $contato->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal" href="#" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash-fill"></i></a>
        </td>
      </tr>
      @empty
      <tr class="align-middle">
        <td class="text-center" colspan="5">No contact found.</td>
      </tr>
      @endforelse

    </tbody>
  </table>


@include('contatos.modal')

@include('contatos.footer')
