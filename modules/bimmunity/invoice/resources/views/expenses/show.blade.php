@extends('layouts.app')

@section('head')
    
@endsection

@section('content')

    <section class="expenses-show-section ifm-form">
        <div class="portlet light ifm-border-light-grey-all">
            <div class="portlet-title ifm-border-light-grey-bottom">
                <div class="caption">
                    <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAALISURBVEhL7VVdiE1RFL75KflJESO/iVIeeRGhiDxIZpx9zpTLnbP/7p07TUmalHJfJEV5EMqLpEE8kK4iKdOUB2HK3xTFC0NIJg9jusK3zllzutfce+e4V3lwv1qdvffaa31rr7XO3okGGvjnENnsVEeZg0LZi5DLtYir7FHHTy9nl5WRSqUmOcp6rjQ7hDKPIE/I2FXmSI2SRwBDQuuVTDEaLVIucqXtw+Y3gUgzkEwmp7C6ZsBPN+Q8T0vhab0Wkb0V0t4U1k7HeD/I342krD4xD+Grl6lC5HK5cajjAaRzGKSHhRDjaR0GILY//54UEbcq1YRobkHxwZNmMy8HIGIhzUd8b9crSHN/RIwG2oITvkdN77RKOTdYLAIMKNV5ntYFZLQ9IMZJjiGKb5h0UapZX4JyxKj9wtDWvoJ9AeNrcZovIobRBbfNrOD1sigmpv8Q5TgLGYbcdaXe6Wq9CvoXIN8XGFRBRBwHRBz+wyYPsu8YX/WMWc3qANCdxiFO8bQiYhMjleuw8XFYDnvGkZllrIrgKDUD+gHofV6qiNjEjrR7QX5IpLJzeKkEdAuhMZ8iCz3rc7kJvFwRf5TqcnBVeg1OeYVqjVKc3GrtZFZVBQI8TnY8jQ+6yYKm4ssADXUdJyh3L48SkJ6jQB2tN7C7eNi+q2Mm0v4ATp6RA3x7cVq8OuiB6Eo1PThRIRyXCmxP/N6UYwJRLqZaguAeN1Nh5JWh9NFpaAznndh3n8Zjgp6/5kxmNhwuJWeetBs9ZVvgLBU2l7mEiIfg8DnV0vXtHkozvWBkT8TY0+3sTs8D8UsE1xU4roZwY8kl/gN1+wxnr6Hrw/gGHKFG1idyjD+B5Cv0g7QutO3Avi9kR/a031o7kd1XBnK+hG6jZq3nb5NyGi+XhdfWvoCy4fj+LEelN1FgCKIf30664yljvLWBBv47JBK/AHmhAyoMvW5AAAAAAElFTkSuQmCC">
                        show expenses
                    </h3>
                </div>
            </div>
            <div>
                @include('metronic-templates::common.errors')
            </div>
            <div class="portlet-body">
                <div class="row">
                    @include('bimmunity/invoice::expenses.show_fields')
                </div>
            </div>
        </div>
    </section>

@endsection
