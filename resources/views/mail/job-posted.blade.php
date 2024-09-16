<x-mail::message>
# {{ $job->title }}

Congrats! Your job is now live on our website.

<x-mail::button :url="url('/jobs/'. $job->id)">
View your job listing
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
