var FormEditable = function() {

    $.mockjaxSettings.responseTime = 500;
    $.ajaxSetup({
        headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') }
    });
    var log = function(settings, response) {
        var s = [],
            str;
        s.push(settings.type.toUpperCase() + ' url = "' + settings.url + '"');
        for (var a in settings.data) {
            if (settings.data[a] && typeof settings.data[a] === 'object') {
                str = [];
                for (var j in settings.data[a]) {
                    str.push(j + ': "' + settings.data[a][j] + '"');
                }
                str = '{ ' + str.join(', ') + ' }';
            } else {
                str = '"' + settings.data[a] + '"';
            }
            s.push(a + ' = ' + str);
        }
        s.push('RESPONSE: status = ' + response.status);

        if (response.responseText) {
            if ($.isArray(response.responseText)) {
                s.push('[');
                $.each(response.responseText, function(i, v) {
                    s.push('{value: ' + v.value + ', text: "' + v.text + '"}');
                });
                s.push(']');
            } else {
                s.push($.trim(response.responseText));
            }
        }
        s.push('--------------------------------------\n');
        $('#console').val(s.join('\n') + $('#console').val());
    }

    var initAjaxMock = function() {
        //ajax mocks

        $.mockjax({
            url: '/task/activity',
            response: function(settings) {
                log(settings, this);
            }
        });

        $.mockjax({
            url: '/error',
            status: 400,
            statusText: 'Bad Request',
            response: function(settings) {
                this.responseText = 'Please input correct value';
                log(settings, this);
            }
        });

        $.mockjax({
            url: '/status',
            status: 500,
            response: function(settings) {
                this.responseText = 'Internal Server Error';
                log(settings, this);
            }
        });

        $.mockjax({
            url: '/groups',
            response: function(settings) {
                this.responseText = [{
                    value: 0,
                    text: 'Guest'
                }, {
                    value: 1,
                    text: 'Service'
                }, {
                    value: 2,
                    text: 'Customer'
                }, {
                    value: 3,
                    text: 'Operator'
                }, {
                    value: 4,
                    text: 'Support'
                }, {
                    value: 5,
                    text: 'Admin'
                }];
                log(settings, this);
            }
        });

    }

    var initEditables = function() {

        //set editable mode based on URL parameter
        if (App.getURLParameter('mode') == 'inline') {
            $.fn.editable.defaults.mode = 'inline';
            $('#inline').attr("checked", true);
            jQuery.uniform.update('#inline');
        } else {
            $('#inline').attr("checked", false);
            jQuery.uniform.update('#inline');
        }

        //global settings 
        $.fn.editable.defaults.inputclass = 'form-control';
        $.fn.editable.defaults.url = '/task/activity';
        $.fn.editable.defaults.method = 'POST';

        //editables element samples 
        $('.taskname').editable({

            type: 'text',
            pk: 1,
            name: 'name',
            _token: $('input[name="_token"]').val(),
            title: 'Enter Task Name',
            success: function(response) {
                console.log('res: ', response);
            }
        });
        $('.repeated_num').editable({
            type: 'number',
            pk: 1,
            _token: $('input[name="_token"]').val(),
            name: 'repeated_num',
            title: 'Enter Repeted num',
            success: function(response) {
                alert('ddddd');
            }
        });
        $('.progress').editable({
            url: '/task/activity',
            type: 'number',
            pk: 1,
            _token: $('input[name="_token"]').val(),
            name: 'progress',
            title: 'Enter Repeted num'
        });

        $('.repeated_period').editable({
            inputclass: 'form-control',
            _token: $('input[name="_token"]').val(),
            name: 'repeated_period',
            source: [{
                value: 'Hour(s)',
                text: 'Hour(s)'
            }, {
                value: 'Day(s)',
                text: 'Day(s)'
            }, {
                value: 'Month(s)',
                text: 'Month(s)'
            }]
        });
        $('#vacation').editable({
            rtl: App.isRTL()
        });

        $('.start_datetime').editable({
            inputclass: 'form-control',
            pk: 1,
            _token: $('input[name="_token"]').val(),
            name: 'start_datetime'
        });

        $('.end_datetime').editable({
            inputclass: 'form-control',
            pk: 1,
            _token: $('input[name="_token"]').val(),
            name: 'end_datetime',
        });

        $('#description').editable({
            showbuttons: (App.isRTL() ? 'left' : 'right')
        });
        $('#pencil').click(function(e) {
            e.stopPropagation();
            e.preventDefault();
            $('#note').editable('toggle');
        });

    }

    return {
        //main function to initiate the module
        init: function() {

            // inii ajax simulation
            // init editable elements
            initEditables();

            // init editable toggler
            $('#enable').click(function() {
                $('#user .editable').editable('toggleDisabled');
            });

            // init 
            $('#inline').on('change', function(e) {
                if ($(this).is(':checked')) {
                    window.location.href = 'form_editable.html?mode=inline';
                } else {
                    window.location.href = 'form_editable.html';
                }
            });

            // handle editable elements on hidden event fired
            $('#user .editable').on('hidden', function(e, reason) {
                if (reason === 'save' || reason === 'nochange') {
                    var $next = $(this).closest('tr').next().find('.editable');
                    if ($('#autoopen').is(':checked')) {
                        setTimeout(function() {
                            $next.editable('show');
                        }, 300);
                    } else {
                        $next.focus();
                    }
                }
            });


        }

    };

}();

jQuery(document).ready(function() {
    FormEditable.init();
});