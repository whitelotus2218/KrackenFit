<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

   <title>Document</title>

   <meta name="csrf-token" content="{{ csrf_token() }}">

   <link rel="stylesheet" href="{{ asset('css/app.css') }}">

   <style>
   	.list-froup{
   		overflow-y: scroll;
   		height: 200px 
   	}
   </style>

 </head>
 <body>
 	<div class="container">
 		<div class="row" id="app">
 			
 			<div class="offset-4 col-4 offset-sm-1 col-sm-10">
 				<li class="list-group-item active">Chat room</li>

 				<div class="badge badge-pill badge-primary">@{{  typing  }}</div>
                 <ul class="list-group">
 				
 				    <message
 			     v-for="value,index in chat.message"
 			     :key=value.index 

                  color= chat.color[index]
                  :user = chat.user[index]
 			     >
 			     	@{{ value }}
 			        </message>

 			    </ul>
              

               <input type="text" class="form-control" placeholder="type your message" v-model='message' @keyup.enter='send'>
 			
 			</div>
 			
 		</div>

 	</div>

    <script src="{{ asset('js/app.js') }}"></script>

 </body>

 </html>
