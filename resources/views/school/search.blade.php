<div class="map-wrap">
    
    <div class="row filters ifm-margin-sm-bottom">
        <div class="col-lg-10">
            <div class="row">
                <div class="col-lg-3 no-padding-right">
                    <select id="Property" class="form-control select2">
                        <option selected disabled>Search for a Facility</option>
                        @foreach($buildings as $building)
                            @foreach($building->facilities as $facility)
                                <option>{{$facility->name}}</option>
                            @endforeach
                        @endforeach    
                    </select>
                </div>
                <div class="col-lg-3 no-padding-right">
                    {!! Form::select('country_id', \App\Country::all()->pluck('name','id'), null, ['class' => 'form-control select2','placeholder'=>'Country','id'=>'country']) !!}
                </div>
                <div class="col-lg-3 no-padding-right">
                    <select id="city" class="form-control select2" placeholder="City">
                        <option value="0">City</option>
                    </select>
                </div>
                <div class="col-lg-3 no-padding-right">
                    <input type="text" id="bname" class="form-control" placeholder="Name">
                </div>	
            </div>
        </div>
        <div class="col-lg-2">
            <button id="searchbtn" name="quick-contact-form-submit" class="btn filter-btn ifm-white button button-small button-3d nomargin" style="width:100%">FILTER</button>
        </div>
    </div>
    <div id="map"></div>
<div>    