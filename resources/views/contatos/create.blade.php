
@include('contatos.header')

  <div class="pb-2 mb-4 border-bottom sticky-top row align-items-center">
    <div class="col">

      <h1 class="h2">Contacts</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item" aria-current="page"><a href="<?php echo url("/contato/index"); ?>">All</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add new contact</li>
        </ol>
      </nav>
    </div>

  </div>

 
  <form action="{{ route('registrar_contato') }}" method="POST" class="col-5">
      @csrf
      <div class="input-group mb-3">
          <span class="input-group-text"><i class="bi bi-person"></i></span>
          <input name="nome" minlength="5" type="text" class="form-control" placeholder="Full name">
      </div>

      <div class="input-group mb-3">
          <span class="input-group-text"><i class="bi bi-phone"></i></span>
          <input name="contato" maxlength="9" type="text" class="form-control" placeholder="Telephone">
      </div>

      <div class="input-group mb-3">
          <span class="input-group-text"><i class="bi bi-envelope"></i></span>
          <input name="email" type="email" class="form-control" placeholder="E-mail">
      </div>

      <div class="btn-toolbar justify-content-end">
          <a href="<?php echo url("/contato/index"); ?>" class="btn btn-outline-secondary me-3">Cancel</a>
          <button class="btn btn-primary">Add contact</button>
      </div>

  </form>


  @include('contatos.footer')