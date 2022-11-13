<h1>{{ $group->title }}</h1>
{!! $group->heroImageHtml !!}}
@forelse ( $users as $user )
    * {{ $user->first_name }} {{ $user->last_name }}<br>
@empty
    No users in this group.
@endforelse

