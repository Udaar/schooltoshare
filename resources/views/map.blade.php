
@section('heads')
<link rel="stylesheet" href="https://js.arcgis.com/3.23/esri/css/esri.css">
    <style>
      html, body, #mapDiv { height: 100%; margin: 0; padding: 0; } 
    </style>
@endsection
@push('scripts')  

    <script src="https://js.arcgis.com/3.23/"></script>
    <script>

      require([
        "esri/map", 
        "esri/dijit/InfoWindowLite",
        "esri/InfoTemplate",
        "esri/layers/FeatureLayer",
        "dojo/dom-construct",
        "dojo/domReady!"
      ], function(
          Map,
          InfoWindowLite,
          InfoTemplate,
          FeatureLayer,
          domConstruct
         ) {

        var map = new Map("mapDiv", {
          basemap: "streets-relief-vector",
          center: [30.780575, 25.991984],
          zoom: 6
        });
       
    
        var infoWindow = new InfoWindowLite(null, domConstruct.create("div", null, null, map.root));
        infoWindow.startup();
        map.setInfoWindow(infoWindow);

        var template = new InfoTemplate();
       

        //add a layer to the map
        var featureLayer = new FeatureLayer("https://services8.arcgis.com/5rNeOa8mc76DIXgn/arcgis/rest/services/schoolegypt/FeatureServer/0", {
           mode: FeatureLayer.MODE_SNAPSHOT,
        outFields: ["*"],
          infoTemplate:template
      
         
        });
         
     
    
       map.addLayer( featureLayer);
       
   
    
          
    map.on('click',function(response){
      
    console.log(response.graphic.attributes);
      
      
  });

      });
    </script>
    @endpush
  
    <div id="mapDiv"></div>
