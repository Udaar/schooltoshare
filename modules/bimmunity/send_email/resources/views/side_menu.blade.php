{{-- Send E-mail --}}

    <li class="{!! (Request::is('*send/email*')) ? 'active' : '' !!}">
        <a class="nav-link ifm-text-left" href="{!!  route('send/email') !!}">
            <span  class="title">Send E-mail</span>
        </a>
    </li>