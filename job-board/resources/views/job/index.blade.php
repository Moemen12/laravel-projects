<x-layout>
  @foreach ($jobs as $job)
    <x-job class="mb-4" :$job>
      <div>
        <x-link-button :href="route('jobs.show', $job)">
          Show
        </x-link-button>
      </div>
    </x-job>
  @endforeach
</x-layout>