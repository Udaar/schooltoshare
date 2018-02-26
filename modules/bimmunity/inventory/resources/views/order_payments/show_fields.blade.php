<div class="container-fluid ifm-no-padding-left ifm-no-padding-right">
    <div class="item-table table-responsive ifm-padding-md-bottom ifm-margin-md-bottom ifm-border-light-grey-bottom">
        <table class="table table-bordered table-hover ifm-no-margin-bottom">
            <thead>
                <th>Total amount</th>
                <th>Paid</th>
                <th>Remain</th>
            </thead>      
            <tbody>
                <tr>
                    <td>${!! $orderPayment->total_value !!}</td>
                    <td>${!! $orderPayment->paid !!}</td>
                    <td>${!! $orderPayment->remains !!}</td>
                </tr>
            </tbody>          
        </table>
    </div>
    <div class="row ifm-margin-md-bottom">
        <div class="col-md-3">
            <label for="" class="bold">Paid at: </label>
            <span>{!! Carbon\Carbon::parse($orderPayment->paid_date)->format('d/m/Y') !!}</span>
        </div>
        <div class="col-md-3">
            <label for="" class="bold">Paid by: </label>
            <span>{!! $orderPayment->payer_name !!}</span>
        </div>
        <div class="col-md-6">
            <label for="" class="bold">Transfared to account number: </label>
            <span>{!! $orderPayment->companyAccount->account_number!!}</span>
        </div>
    </div>
</div>