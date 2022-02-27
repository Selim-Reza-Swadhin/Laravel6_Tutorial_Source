<h1>Homee Page</h1>
<br>
<a href="{{ route('test') }}">Home</a>
<a href="{!! route('test') !!}">Home Ex</a>
<a href="{{ route('about') }}">About</a>
<a href="{!! route('about') !!}">About Ex</a>

<br>
<?php
echo 'test php';
?>


<br>
<!-- blade template -->

{{'test blade'}}
<br>
{{'<h2>test blade</h2>'}}
<br>
{!!'<h2>test blade</h2>'!!}

@for($i=0; $i<10; $i++)

{{$i}}

@endfor

<br>
@php($i = 15)
{{ $i }}

<br>

<!-- comment cut and then test -->
<!-- compact with array -->
<!-- compact -->
<h2>Compact</h2>
{{$name}}
{{$lname}}
{{$age}}

<br>
<!-- with -->
<h2>With</h2>
{{$name}}
{{$lname}}
{{$age}}


<br>
<!-- with -->
<h2>With</h2>
{{$a}}
{{$b}}
{{$c}}



<br>
<!-- array -->
<h2>Array</h2>
{{$x}}
{{$y}}
{{$z}}