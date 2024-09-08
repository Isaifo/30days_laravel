

<x-layout>
<x-slot:heading>
    Jobs Listing
</x-slot:heading>

<h2 class="font-bold">{{$job['title']}}</h2>

<p>This jog pays {{$job['salary']}} per year</p>
</x-layout>