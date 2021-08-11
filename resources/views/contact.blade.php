<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
       <form method="POST" action="/contact">

       @csrf

         <div class="form-group">
           <label for="email">Email address</label>
           <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">

           @error('email')
               <p>{{ $message }}</p>
           @enderror
         </div>
         <button type="submit" class="btn btn-primary">Email Me</button>

         @if (session('message'))
         <p>
             {{ session('message') }}
         </p>
         @endif
       </form>
</body>
</html>
