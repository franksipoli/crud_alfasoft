<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Ver um Contato</title>
</head>
<body>
    <label for="">Nome</label> <br />
    <input type="text" name="nome" minlength="5" value="{{ $contato->nome }}"> <br />
    <label for="">Contato</label> <br />
    <input type="text" name="contato" maxlength="9" value="{{ $contato->contato }}"> <br />
    <label for="">Email</label> <br />
    <input type="text" name="email" value="{{ $contato->email }}"> <br />
</body>
</html>
        