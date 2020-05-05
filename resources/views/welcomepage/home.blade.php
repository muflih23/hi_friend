<html>
    <head>
        <title>login berhasil!</title>
    </head>
    <body>
        <h1>LOGIN BERHASIL!</h1>
        <p>Hai, {{Session::get('name')}}. Apa Kabar?</p>
        <a href="/logout">logout</a>
    </body>
</html>