<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=400">
  <title> Chat 0.5 </title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  
  <div class="fundoCabeca" >
    <input id="inputPessoaValorBruto" type="text">
    <input id="buttontEnviar" type="button" value="Enviar" onclick="CarregarValorInputPessoa()">
  </div>
  
  <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-app.js"></script>
  
  <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-database.js"></script>

  <script>
    
    var firebaseConfig = {
      apiKey: "AIzaSyBh32gMmiHnoFnYk-Uv5pJ8ibrm38CRSmQ",
      authDomain: "chat-05-d40e0.firebaseapp.com",
      databaseURL: "https://chat-05-d40e0.firebaseio.com",
      projectId: "chat-05-d40e0",
      storageBucket: "chat-05-d40e0.appspot.com",
      messagingSenderId: "580890616077",
      appId: "1:580890616077:web:652ab3a09d70ce5a261044"
    };
   
      firebase.initializeApp(firebaseConfig);
  </script>

  <script src="main.js"></script>
</body>
</html>
