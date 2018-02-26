<div class="container-fluid order-info">
    <!-- Input Fields -->
    <div class="row">
        <input type="hidden" name="order_number" id="order_number" value="PO_<?php echo time();?>">
        <div class="col-md-6 col-xs-12 ifm-no-padding-left">
            <div class="container-fluid ifm-no-padding-right">
                <!-- Order Number Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            <label class="ifm-grey">Order Number</label>
                            <br/>
                            <label style="font-size: 18px;font-weight: bold;color: blue;" id="order_number_label"> </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12 ifm-no-padding-left ifm-no-padding-right">
            <div class="container-fluid ifm-no-padding-right">
                <!-- Cost Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            <label for="cost" class="ifm-grey">Cost</label>
                            <input type="text" required name="cost" id="cost"  class="form-control ifm-border-light-grey-all" value="@if (!empty($inOrder)) {{ $inOrder->cost }} @else {{0}} @endif" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12 ifm-no-padding-left">
            <div class="container-fluid ifm-no-padding-right">
                <!-- Date Received Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            <label for="date_received" class="ifm-grey">Date Received</label>
                            <div class="input-group input-medium date date-picker"  data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                <input required name="date_received" id="date_received" value="@if (!empty($inOrder)) {{ \Carbon\Carbon::parse($inOrder->date_received)->format('Y-m-d') }} @endif" type="text" class="form-control ifm-white-bg ifm-border-light-grey-all" readonly>
                                <span class="input-group-btn">
                                    <button class="btn default ifm-main-bg ifm-white ifm-border-main-all" type="button">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12 ifm-no-padding-left ifm-no-padding-right">
            <div class="container-fluid ifm-no-padding-right">
                <!-- Company Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            <label for="company_id" class="ifm-grey">Company</label>
                            <select class="select2" required name="company_id" required="required">
                                @foreach($companies as $company)
                                    <option @if(!empty($inOrder) && $inOrder->company_id == $company->id) selected="selected" @endif value="{{$company->id}}">{{$company->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12 ifm-no-padding-left">
            <div class="container-fluid ifm-no-padding-right">
                <!-- Date Required Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            <label for="date_required" class="ifm-grey">Date Required</label>
                            <div class="input-group input-medium date date-picker"  data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                <input required name="date_required" id="date_required" value="@if (!empty($inOrder)) {{ \Carbon\Carbon::parse($inOrder->date_required)->format('Y-m-d') }} @endif" type="text" class="form-control ifm-white-bg ifm-border-light-grey-all" readonly>
                                <span class="input-group-btn">
                                    <button class="btn default ifm-main-bg ifm-white ifm-border-main-all" type="button">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hidden Fields -->
    @if(isset($ticket_id) && isset($action_id))
    <input type="hidden" name="ticket_id" value="{{$ticket_id}}">
    <input type="hidden" name="action_id" value="{{$action_id}}">
    @endif
    <!-- Submit Field -->
    <div class="row">
        <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
            <div class="form-group col-sm-12 ifm-no-margin-bottom ifm-no-padding-left ifm-no-padding-right">
                <div class="form-actions ifm-no-padding-bottom ifm-padding-md-top ifm-border-light-grey-top">
                    <div class="row  col-md-offset-0">
                        <button class="btn ifm-btn-default ifm-main-bg ifm-white next-btn" type="button" id ="next_button" style="display: none">Next</button>
                        <button class="btn ifm-btn-default ifm-main-bg ifm-white submit" type="submit" disabled>Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(document).ready(function() {
        console.log($('#order_number').val());
        $('#order_number_label').text($('#order_number').val());
    });
</script>
@endpush
