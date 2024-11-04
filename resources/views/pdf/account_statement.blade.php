<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bank Statement</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #fff;
                color: #000;
                margin: 0;
                padding: 0;
            }

            .statement-container {
                width: 900px;
                margin: 20px auto;
                border: 1px solid #000;
                padding: 20px;
                box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
            }

            header {
                display: flex;
                justify-content: space-between;
                border-bottom: 2px solid #000;
                padding-bottom: 10px;
            }

            .bank-details h1 {
                margin: 0;
                font-size: 24px;
                color: #000;
            }

            .bank-details p {
                margin: 5px 0;
                line-height: 1.4;
                color: #000;
            }

            .statement-info {
                text-align: right;
            }

            .statement-info p {
                margin: 5px 0;
                color: #000;
            }

            .account-info {
                display: flex;
                justify-content: space-between;
                margin: 20px 0;
                border-bottom: 2px solid #000;
                padding-bottom: 10px;
            }

            .account-info>div {
                flex: 1;
                color: #000;
            }

            .statement-period,
            .account-number {
                text-align: right;
            }

            .statement-table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 10px;
            }

            .statement-table th,
            .statement-table td {
                border: 1px solid #000;
                padding: 8px;
                text-align: left;
                color: #000;
            }

            .statement-table th {
                background-color: #d3d3d3;
            }

            .statement-table tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            .statement-table tfoot {
                font-weight: bold;
                background-color: #d3d3d3;
            }
        </style>
    </head>

    <body>
        <div class="statement-container">
            <header>
                <div class="bank-details">
                    <h1 style="text-transform: capitalize">{{ strtoupper(config('app.name')) }}</h1>
                    <p>{{ config('app.address') }}<br>
                        {{ config('app.email') }}<br>
                        {{ config('app.phone') }}</p>
                </div>
                <div class="statement-info">
                    <p style="text-transform: capitalize">{{ strtoupper($user->account_type) }} ACCOUNT STATEMENT</p>
                </div>
            </header>
            <section class="account-info">
                <div>
                    <p>{{ $user->first_name . ' ' . $user->last_name }}<br>
                        {{ $user->address }}<br>
                        {{ $user->email }}</p>
                </div>
                <div class="statement-period">
                    <p>Statement period<br>
                        {{ $fromDate }} to {{ $toDate }}</p>
                </div>
                <div class="account-number">
                    <p>Account No.<br>
                        {{ $user->account_number }}</p>
                </div>
            </section>
            <table class="statement-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Reference ID</th>
                        <th>Amount</th>
                        <th>Type</th>
                        <th>Balance</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->date }}</td>
                            <td>{{ $transaction->description }}</td>
                            <td>{{ $transaction->reference_id }}</td>
                            <td>{{ formatAmount($transaction->amount) }} {{ currency($user->currency,'code') }}
                            </td>
                            <td>{{ $transaction->type }}</td>
                            <td>{{ formatAmount($transaction->current_balance) }} {{ currency($user->currency,'code') }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3"><strong>*** Totals ***</strong></td>
                        <td>{{ formatAmount($totalAmount) }} {{ currency($user->currency,'code') }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </body>

</html>
