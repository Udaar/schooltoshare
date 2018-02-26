{{-- Bimmodels --}}
<li class="nav-item {!! (Request::is('*bimModels*'))|| Request::is('*levels*') || Request::is('*bimSystems*') || Request::is('*viewerparital*') || (Request::is('*bimSystems*')) || (Request::is('*bimProjects*')) || (Request::is('*zones*')) || (Request::is('*buildings*')) || (Request::is('*spaces*')) || (Request::is('*bimassets*')) || Request::is('*getviewer*') ?'active' :'' !!}">
    <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAEySURBVDhPnZK9SgNBGEUnnQgSg08QsNUmYhsQO4kGJBY+goVYBLRMoWhlo4XPYCWCiEWewM5ORVAMCIKaxnbXc2dnzcyuuwEvHO58fxcW1khxHE9CrYwoiqbsclYMJxiu4kMoFDvStjsbiVmVwSPexh/gyePDXofqudNENKrqsryvN36AHwne63CjuS96J1glG3CI6WgFdh1dmIEtr5cylwuAO9iATw/1drz61vlzUcCm6lTUL1gbzh0Nehf4MBtwDP1xAdTzcM07F/ANLaE6FbUC9pLK1gP3DAMkhq9Q59nBm87X4NQuhMoHSCzbT0i9RL8BFZb7Se8fARKFfqB7dXUIl9CEM/UKNAqQWJ6Fd1DAGyzClVv+S2GAxMESg04yLxe7X+4sFLNpWB4HAQvGGPMDZnAkEjRHBpYAAAAASUVORK5CYII=">
        <span class="title">Bimmodels</span>
        <span class="arrow  {!! (Request::is('*bimModels*'))|| Request::is('*levels*') || Request::is('*bimSystems*') || Request::is('*viewerparital*') || (Request::is('*bimSystems*')) || (Request::is('*bimProjects*')) || (Request::is('*zones*')) || (Request::is('*buildings*')) || (Request::is('*spaces*')) || (Request::is('*bimassets*')) || Request::is('*getviewer*') ? 'open' : '' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!! (Request::is('*bimModels*'))|| Request::is('*levels*') || Request::is('*bimSystems*') || Request::is('*viewerparital*') || (Request::is('*bimSystems*')) || (Request::is('*bimProjects*')) || (Request::is('*zones*')) || (Request::is('*buildings*')) || (Request::is('*spaces*')) || (Request::is('*bimassets*')) || Request::is('*getviewer*') ? 'display: block;' : '' !!}">
        <li class="{!! Request::is('*getviewer*') ? 'active' : '' !!}">
                <a class="nav-link ifm-text-left" href="{!! url('/getviewer') !!}">
                    <span  class="title">Viewer Show</span>
                </a>
        </li>
        <li class="{!! Request::is('*bimModels*') ? 'active' : '' !!}">
                <a class="nav-link ifm-text-left" href="{!! url('/bimModels') !!}">
                    <span  class="title">Bim-Models</span>
                </a>
        </li>
        <li class="{!! Request::is('*buildings*') ? 'active' : '' !!}">
                <a class="nav-link ifm-text-left" href="{!! url('/buildings') !!}">
                    <span  class="title">Buildings</span>
                </a>
        </li>
        {{--  <li class="{!! Request::is('*zones*') ? 'active' : '' !!}">
                <a class="nav-link ifm-text-left" href="{!! url('/zones') !!}">
                    <span  class="title">Zones</span>
                </a>
        </li>
        <li class="{!! Request::is('*spaces*') ? 'active' : '' !!}">
                <a class="nav-link ifm-text-left" href="{!! url('/spaces') !!}">
                    <span  class="title">Spaces</span>
                </a>
        </li>  --}}
        <li class="{!! Request::is('*bimassets*') ? 'active' : '' !!}">
                <a class="nav-link ifm-text-left" href="{!! url('/bimassets') !!}">
                    <span  class="title">Assets</span>
                </a>
        </li>
    </ul>

</li>