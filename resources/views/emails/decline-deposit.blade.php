@component('mail::message')

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>


# Hello {{ $data['deposit']->user->first_name.' '.$data['deposit']->user->last_name }}
<br>

<p>Your Deposit Has Been Declined</p>

<strong>Deposit Details</strong>

<table >
    <tr>
        <th>Amount:</th>
        <td>$@convert($data['deposit']->amount)</td>
    </tr>
    <tr>
        <th>Payment Method:</th>
        <td>{{ $data['deposit']->payment_method  }}</td>
    </tr>
    <tr>
        <th>Status:</th>
        <td>{!! $data['deposit']->status() !!}</td>
    </tr>

</table>


<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
