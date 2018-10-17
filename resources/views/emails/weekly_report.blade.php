@extends('emails.template')

@section('content')
    Here's your weekly report for {{ $space->name }}.

    This week (#{{ $week }}) you've
    <ul>
        <li>Spent CURRENCY {{ number_format($totalSpent / 100, 2) }}</li>
        <li>Most of which you've spent on SPENT_MOST_TAG_NAME (CURRENCY SPENT_MOST_TAG_AMOUNT)</li>
    </ul>

    If you don't want to receive a weekly report, head over to <a href="{{ config('app.url') . '/settings' }}">settings</a> and let us know.
@endsection
