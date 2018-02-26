<!-- Category -->

<div class="row ifm-margin-sm-bottom">
  <label class="col-md-2 item-label">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACnSURBVDhPYxjmIC0trSA1NXUPkN5NCgbq2Qekg8CGADnxQLwMzCER5ObmsgMN2gzU7w0y6Eh9fT0LVI5kUFhYyAk07BTIoC1QMbIB0IzDKAYBTfYF+Z0YDNRnDtWGaRC5gHYGAZ08OLx2Nj4+XgAqRjLIzMyUBbrwDEN6ero1kLE5OTlZCCgoSAoG6pUG6c3IyNABmwp0VQRQYBU5GKjXHmzIcAUMDAAsQKx41bBzGwAAAABJRU5ErkJggg==">
    Category
  </label>
  <label class="col-md-10 item-value">{!! $item->category->name !!}</label>
</div>

<!-- /Category -->

<!-- Barcode -->

<div class="row ifm-margin-sm-bottom">
  <label class="col-md-2 item-label">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAABqSURBVDhPY6AaSEtLK09NTbVPSUmJRmZDsQVIDIaBfBlcakAG/QdKtAPxYWQ2lF8BEkPCNiAam5pRg0YNgkngUoSERw3CoQgJ08EgIKcDyPAA4gxkNginp6c7gMRgGMhXwKUGWipRChgYAE4/IdGB0djmAAAAAElFTkSuQmCC">
    Barcode
  </label>
  <label class="col-md-10 item-value">{!! $item->barcode !!}</label>
</div>

<!-- /Barcode -->

<!-- Created By -->

<div class="row ifm-margin-sm-bottom">
  <label class="col-md-2 item-label">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAEsSURBVDhP1ZJPKwZhFMWHxEa+gIWFJaVsLCi+gjTFhprmX2/NwlqZFcUHYClfQdnIys4WhbCwYilhp/xOnWYz7+thx69Oc8+dc+/0PE307+jLsmxcsv89eZ7PseAGfVrXRVHM+vXPKMtykkVvqOp0OsOSavXSNJ1wLAxfP2Zox7aB/i46sg3DkmcG5m0bONoC/SfbMCy6YmDZtoFFK/QvbcMQ3kQXVVWNuBWpVg9tuBWGoSEGTtEj0r1Iqk/iOB50LAwD0+gcfXDMM0m1ehxvyrHvITzD4CvPQ/TO4CrPNaSlB+hFGce7U9f1AKEHwpU8dUp9K1En7q2je2Xlu0JgiaE7Qv1utdA7ZfgxF91qQ2CbZXu2PSGzj7Zs2yRJMsadjNr2RBllbf8kUfQF+66QtdiaI88AAAAASUVORK5CYII=">
    Created By
  </label>
  <label class="col-md-10 item-value">{!! $item->user->name !!}</label>
</div>

<!-- /Created By -->

<!-- Created At -->

<div class="row ifm-margin-sm-bottom">
  <label class="col-md-2 item-label">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAELSURBVDhPY0AG6enpXqmpqafT0tImQIUwAFB+PRCfy8jI0IEKQQBQEz9QoheIZwLxYSD2BuKHUD42fBWIM4F4O5TfVF9fzwRzRW1mZqYSiAbyk4GG7wXxsWGgmpMgdUCcBOID1S4BYjmQU0EuyIS6Tg7IngTEjmDnYgFAuQigum4g5ofypyEbNBvICSUHA/XuBNLUNwjstcTERNGUlBRjYjBQM1avgQ0C0UC8Gog7gPgOlN6JQ8ybkEEwBVuIFMNuEFDwPBDvBrJfQ+nr2MSAmE4uAuJ8UGAC6cNQuh2HGEGDhmNgkwPgBgEDzwLIARUf6MUFsfgS0CARsKlJSUlS6MUFsRiUrRgYGBgAXFWiffmTqDUAAAAASUVORK5CYII=">
    Created At
  </label>
  <label class="col-md-10 item-value">{!! Carbon\Carbon::parse($item->created_at)->format('d/m/Y') !!}</label>
</div>

<!-- /Created At -->

<!-- Description -->

<div class="row">
  <label class="col-md-2 item-label">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADZSURBVDhPY4CB9PR0hdTUVBdcOC0tzTk0NJQZqhw3ACqsAGroAtJYAVDuJBAvJmgYUG0FENtAuRgAaMhSoHwBEC/CaxiRBvEDcSJew4g1CMTGaxgRBlUC5XfDMJB/GRhBIVBpBCBkEDoAGhQFwlAuAiAblJGRIZaZmamEDScnJwuB1BBlENDJyUBFM7HhlJSUQJAaIJuwQcQAogwCKkAJWBiOiYnhBisGgsHhIhAGhR9UDR1dRAygm0EbgZJY0w86BqrdC6QxDYqPjxfAlpLx4aysLB6IbgYGAFDq6VFVuNmgAAAAAElFTkSuQmCC">
    Description
  </label>
  <label class="col-md-10 item-value description">{!! $item->description !!}</label>
</div>

<!-- /Description -->

<!-- Scripts -->

@push('scripts')
    <script src="/js/jquery.touchSwipe.min.js"></script>
    <script>
        // Swipe
        var scrollValue = 0;
        $(".swipe").swipe( { swipeStatus:swipe2, allowPageScroll:"horizontal"} );
            function swipe2(event, phase, direction, distance) {
                $('ul.swipe').each(function(){
                    if(direction === 'left'){
                        $(this).scrollLeft(scrollValue+=10);
                        console.log(scrollValue);
                    }
                    if(direction === 'right'){
                        $(this).scrollLeft(scrollValue-=10);
                        console.log(scrollValue);
                    }
                });
        }
    </script>
@endpush

<!-- /Scripts -->
