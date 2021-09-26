@include('contatos.header')


  <div class="pb-2 mb-4 border-bottom sticky-top row align-items-center">
    <div class="col">

      <h1 class="h2">Contacts</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item" aria-current="page"><a href="<?php echo url("/contato/index"); ?>">All</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit contact</li>
        </ol>
      </nav>
    </div>

  </div>

  <form action="{{ route('alterar_contato', ['id' => $contato->id]) }}" method="POST" class="col-5">

      @csrf

      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-person"></i></span>
        <input type="text" name="nome" minlength="5" value="{{ $contato->nome }}" class="form-control" placeholder="Full name">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-phone"></i></span>
        <input type="text" name="contato" maxlength="9" value="{{ $contato->contato }}" class="form-control" placeholder="Telephone">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
        <input type="email" name="email" value="{{ $contato->email }}" class="form-control" placeholder="E-mail">
      </div>

      <div class="btn-toolbar justify-content-between">
        <div class="col">
          <a data-user-name="{{ $contato->nome }}" data-user-id="{{ $contato->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal" href="#" class="btn btn-outline-danger">Delete</a>
        </div>
        <div class="col d-flex justify-content-end">
          <a href="<?php echo url("/contato/index"); ?>" class="btn btn-outline-secondary me-3">Cancel</a>
          <button class="btn btn-primary">Update</button>
        </div>
      </div>

  </form>

</div>


@include('contatos.modal')

@include('contatos.footer')
