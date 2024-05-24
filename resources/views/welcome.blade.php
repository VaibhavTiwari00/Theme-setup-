<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>First App</title>

       
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">

      @include('components.header')

      Laravel {!! "<h1>hello</h1>" !!}



       {{-- it prevents you from xss attacks (cross site scripting) --}}
       {{-- @php and @endphp for wirting php --}}

       {{-- @if (true)
           <h1>hello</h1>
           @else
           <h2>hello</h2
         
       @endif --}}


       {{-- @isset($var)
         
       @endisset --}}

       {{-- @empty($var)
        
        @endempty}}



        {{-- loop:- for
          foreach -> multiple things
          while
          forelse --}}


         @include('components.footer',['status'=>'active'])

         {{-- includeWhen --}}

         {{-- when true it will include --}}
         {{-- @includeWhen(true,'components.footer' ) --}}
         {{-- when false it will include --}}
         {{-- @includeUnless(false,'components.footer' ) --}}

    </body>
</html>
