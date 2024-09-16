<x-layout>
<x-slot:heading>
        about Page
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job) 
        <li>
            <a href="/jobs/3">
                <strong>{{ $job['title']}}:</strong> Pays {{$job['salary'] }} per year
            </a>
        </li>
    @endforeach
    </ul>
</x-layout>