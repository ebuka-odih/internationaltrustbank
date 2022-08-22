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


# Hello {{ $data['card']->user->first_name.' '.$data['card']->user->last_name }}
<br>

<p>You Requested For Debit Card</p>

<strong>Card information</strong>

<table >
    <tr>
        <th>Nick Name:</th>
        <td>{{ $data['card']->nickname }}</td>
    </tr>
    <tr>
        <th>Card Type:</th>
        <td>{{ $data['card']->card_type  }}</td>
    </tr>

</table>


<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
