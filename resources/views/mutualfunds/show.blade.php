@extends('app')
@section('content')
    <h1>Mutual Fund</h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Mutual Fund Name</td>
                <td><?php echo ($mutualfunds['name']); ?></td>
            </tr>
            <tr>
                <td>Purchase Date</td>
                <td><?php echo ($mutualfunds['start_date']); ?></td>
            </tr>
            <tr>
                <td>Purchase Price</td>
                <td><?php echo ($mutualfunds['buy_price']); ?></td>
            </tr>
            <tr>
                <td>Current Price</td>
                <td><?php echo ($mutualfunds['current_price']); ?></td>
            </tr>
			<tr>
                <td>Number of Shares</td>
                <td><?php echo ($mutualfunds['shares']); ?></td>
            </tr>
            <tr>
            </tbody>
        </table>
    </div>
@stop
