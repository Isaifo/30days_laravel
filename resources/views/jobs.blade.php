

<x-layout>
<x-slot:heading>
    Jobs Page
</x-slot:heading>

<ul>



@foreach ($jobs as $job )
<li>
    
<a href="/jobs/" class="text-blue-500">
<strong>{{$job['title']}}</strong>: Pays {{ $job ['salary']}} pear year.</li>
</a>
</li>

@endforeach
</ul>
</x-layout>
