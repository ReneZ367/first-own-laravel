@props(['birthday'])

<div class="flex justify-between">
    <a href="/birthday/{{ $birthday['id'] }}" class="underline">{{ $birthday['name'] }}</a>
    <p>{{ $birthday['date'] }}</p>
</div>
