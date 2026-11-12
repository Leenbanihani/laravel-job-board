<div>
   <h1>hello index</h1>
      <h1>my name is: {{$name}}</h1>
   @foreach ($jobs as $job )
     <div>{{ $job['title'] }} :{{ $job['salary'] }}  </div>
   @endforeach
</div>
