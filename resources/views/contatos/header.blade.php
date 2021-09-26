<!doctype html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacts - Alfasot</title>

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/icons/bootstrap-icons.css') }}" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container-fluid page-container vh-100">
      <div class="row h-100">

        <div class="sidebar d-flex flex-column flex-shrink-0 p-3 h-100" style="width: 280px;">
          <a href="<?php echo url("/contato/index"); ?>" class="flex-column d-flex align-items-center mb-3 mb-md-0 me-md-auto">
            <img class="w-75" src="{{ asset('assets/img/logo-white.png') }}" alt="Alfasoft" />
          </a>

          <hr>

          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
              <a href="#" class="nav-link active"><i class="bi bi-people-fill"></i> Contacts</a>
            </li>
          </ul>

          <div class="mt-auto flex-column d-flex align-items-center">
            <span class="text-white">Dev by Frank Sipoli</span>
          </div>
        </div><!--.sidear-->

        <div class="col p-4 page-content overflow-auto">