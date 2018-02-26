
@push('head')
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />

<!-- External libraries -->
<script src="https://code.jquery.com/jquery-2.1.2.js"></script><!-- jquery-2.1.2.min.js -->
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.js"></script> <!-- http://jqueryui.com/ -->

<!-- Autodesk Forge Viewer -->
<link href="https://developer.api.autodesk.com/viewingservice/v1/viewers/style.min.css?v=v2.12" rel="stylesheet" />
<script src="https://developer.api.autodesk.com/viewingservice/v1/viewers/three.min.js?v=v2.12"></script>
<script src="https://developer.api.autodesk.com/viewingservice/v1/viewers/viewer3D.js?v=v2.12"></script>


<!-- Our scripts/css -->
<link rel="stylesheet" href="/metronic/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css">
<link rel="stylesheet" href="/css/view.css">
<link rel="stylesheet" href="/metronic/reset/modules/bim_model/viewer.css">
<style rel="stylesheet">
        .sub-list{
            display: none;
        }
        .chiled_list{
            display: none;
        }
</style>
<script src="/metronic/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
<script src="/metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script>
    $(document).ready (function () {
        initializeAutodeskViewer ("{{$urn}}","{{$token}}") ;
        // Slim Scroll
        $('.form-container').slimScroll({
            height: '696px'
        });
    }) ;

    var QueryString =function () {
        // This function is anonymous, is executed immediately and
        // the return value is assigned to QueryString!
        var query_string ={} ;
        var query =window.location.search.substring (1) ;
        var vars =query.split("&");
        for (var i=0;i<vars.length;i++) {
            var pair =vars [i].split ("=") ;
            // If first entry with this name
            if ( typeof query_string [pair [0]] === 'undefined' ) {
                query_string [pair [0]] =decodeURIComponent (pair [1]) ;
                // If second entry with this name
            } else if ( typeof query_string [pair [0]] === 'string' ) {
                var arr =[ query_string [pair [0]],decodeURIComponent (pair [1]) ] ;
                query_string[pair[0]] = arr;
                // If third or later entry with this name
            } else {
                query_string [pair [0]].push (decodeURIComponent (pair [1])) ;
            }
        }
        return (query_string) ;
    } () ;

    var urn  ;
    var token  ;
    function getAccessToken (onGetAccessToken) {
        onGetAccessToken (token, 82000) ;
    }

    var oDocument =null, oViewer =null ;
    var oViews3D =null, oViews2D =null ;

    function initializeAutodeskViewer (urn,token) {
        window.urn=urn;
        window.token=token;
        var options ={ 'getAccessToken': getAccessToken, 'env': 'AutodeskProduction' /*, 'accessToken': '' */ } ;
        Autodesk.Viewing.Initializer (options, loadModel) ;
    }

    function loadModel () {
        var pattern =/^(urn|https?):.*$/g ;
        if ( !pattern.test (urn) )
            urn ='urn:' + urn ;
        pattern =/^(urn):.*$/g ;
        if ( pattern.test (urn) )
            Autodesk.Viewing.Document.load (urn, onDocumentLoaded, onError) ;
        else
            startViewer (urn, urn.replace (/[^\/]*$/, '')) ;
    }

    function onDocumentLoaded (doc) {
        oDocument =doc ;
        // Get all the 3D and 2D views (but keep in separate arrays so we can differentiate in the UI)
        oViews3D =Autodesk.Viewing.Document.getSubItemsWithProperties (doc.getRootItem (), { 'type': 'geometry', 'role': '3d' }, true) ;
        oViews2D =Autodesk.Viewing.Document.getSubItemsWithProperties (doc.getRootItem (), { 'type': 'geometry', 'role': '2d' }, true) ;
        // Load up first a 3D view by default
        var viewable =null ;
        var level=[];
        var units=[];
        var assets=[];
        var check_asset;
        if ( oViews3D.length > 0 )
            viewable =oViews3D [0] ;
        else if ( oViews2D.length > 0 )
            viewable =oViews2D [0] ;
        else
            return (alert ('ERROR: No 3D or 2D views found in this document!')) ;

        for ( var i =0 ; i < oViews3D.length ; i++ ) {
            var level_name=oViews3D [i].name.substring(0, oViews3D [i].name.indexOf("-"));
            if(level.indexOf(level_name)== -1){
                level.push(level_name);
            }
            check_asset=oViews3D [i].name.substring(oViews3D [i].name.indexOf("-")+1, oViews3D [i].name.length);
            if(check_asset.substring(0,check_asset.indexOf("-")) == "AM"){
                assets.push([level_name,[i,oViews3D [i].guid,oViews3D [i].name.substring(oViews3D [i].name.indexOf("-")+1, oViews3D [i].name.length),'3d']]);
            }
            else{
                units.push([level_name,[i,oViews3D [i].guid,oViews3D [i].name.substring(oViews3D [i].name.indexOf("-")+1, oViews3D [i].name.length),'3d']]);  
            }
            //var r =$('<div><button id="view_' + i + '" data="' + oViews3D [i].guid + '">' + oViews3D [i].name + '</button></div>') ;
            //$('#list').append (r) ;
            //$('#view_' + i).click (function (e) { switchView (e, '3d') ; }) ;
            
        }
        for ( var i =0, j =1000 ; i < oViews2D.length ; j++, i++ ) {
            var level_name=oViews2D [i].name.substring(0, oViews2D [i].name.indexOf("-"));
            if(level.indexOf(level_name)== -1){
                level.push(level_name);
            }
            check_asset=oViews2D [i].name.substring(oViews2D [i].name.indexOf("-")+1, oViews2D [i].name.length);
            if(check_asset.substring(0,check_asset.indexOf("-")) == "AM"){
                assets.push([level_name,[j,oViews2D [i].guid,oViews2D [i].name.substring(oViews2D [i].name.indexOf("-")+1, oViews2D [i].name.length),'2d']]);                                
            }
            else{
                units.push([level_name,[j,oViews2D [i].guid,oViews2D [i].name.substring(oViews2D [i].name.indexOf("-")+1, oViews2D [i].name.length),'2d']]);                
            }
            //var r =$('<div><button id="view_' + j + '" data="' + oViews2D [i].guid + '">' + oViews2D [i].name + '</button></div>') ;
            //$('#list').append (r) ;
            //$('#view_' + j).click (function (e) { switchView (e, '2d') ; }) ;
        }
        console.log('levels : ',level);
        console.log('units : ',units);
        console.log('assets : ',assets);
        
        //for ( var j =0; j < plans.length ; j++ ) {
             //   $(document).on('click','#view_' + plans[j][1][0],function (e) { switchView (e, plans[j][1][3]) ; }) ;
        //}
            
        var r='<ul class="list">';
            
                for ( var i =0; i < level.length ; i++ ) {
                    r+= '<li>'+
                            '<a><div><button>Level '+level[i]+'</button></div></a>'+
                            '<ul class="sub-list">'+
                                '<li><a><div><button style="background-color:transparent!important" class="ifm-grey ifm-no-border-all text-left">Units</button></div></a></li>'+
                                    '<ul class="chiled_list">';
                                for ( var j =0; j < units.length ; j++ ) {
                                    if(units[j][0] == level[i]){
                                        r+='<li><div><button id="view_' + units[j][1][0] + '" data="' + units[j][1][1] + '">Unit ' + units[j][1][2] + '</button></div></li>';
                                        if(units[j][1][3] == "3d")
                                            $(document).on('click','#view_' + units[j][1][0],function (e) { switchView (e, "3d") ; }) ;
                                        else
                                            $(document).on('click','#view_' + units[j][1][0],function (e) { switchView (e, "2d") ; }) ;
                                    } 
                                }
                    r+=             '</ul>'+
                                '</li>'+            
                                '<li><a><div><button style="background-color:transparent!important" class="ifm-grey ifm-no-border-all text-left">Assets</button></div></a></li>'+
                                    '<ul class="chiled_list">';
                                        for ( var j =0; j < assets.length ; j++ ) {
                                            if(assets[j][0] == level[i]){
                                                r+='<li><div><button id="view_' + assets[j][1][0] + '" data="' + assets[j][1][1] + '">Asset ' + assets[j][1][2] + '</button></div></li>';
                                                
                                                if(assets[j][1][3] == "3d")
                                                    $(document).on('click','#view_' + assets[j][1][0],function (e) { switchView (e, "3d") ; }) ;
                                                else
                                                    $(document).on('click','#view_' + assets[j][1][0],function (e) { switchView (e, "2d") ; }) ;
                                            } 
                                        }
                    r+=             '</ul>'+
                                '</li>'+
                            '</ul'+
                        '</li>';
                }
                r+=   '</ul>';
                $('#list').append (r) ;
        startViewer (doc.getViewablePath (viewable), doc.getPropertyDbPath ()) ;
    }

    function startViewer (svfUrl, sharedPropertyDbPath) {
        if ( oViewer )
            return (loadModelInViewer (svfUrl, sharedPropertyDbPath)) ;

        var modelOptions ={ sharedPropertyDbPath: sharedPropertyDbPath } ;

        oViewer =new Autodesk.Viewing.Private.GuiViewer3D ($("#viewer") [0]) ;
       
        //var pattern =/^(urn):.*$/g ;
        //if ( pattern.test (urn) ) {
            
        oViewer.start (svfUrl, modelOptions, onModelLoaded, onError) ;
        oViewer.loadExtension('Autodesk.ADN.Viewing.Extension.Color');
        oViewer.addEventListener(Autodesk.Viewing.SELECTION_CHANGED_EVENT, function(ob){
            $(document).trigger("viewer_selected",ob);
            console.log('isLoadDone:',ob.model.isLoadDone() )
            if(ob.model.isLoadDone()){
                $(document).trigger("change_color",ob);
            }
            var nodeId=ob.dbIdArray[0];
            // oViewer.setColorMaterial([13168],0xff0000);
            // viewer.restoreColorMaterial([nodeId]);
        });
        

        //} else {
        //    oViewer.initialize () ;
        //    oViewer.loadModel (svfUrl, modelOptions, onModelLoaded, onError) ;
        //}
        //oViewer.addEventListener (Autodesk.Viewing.TOOLBAR_CREATED_EVENT, onViewerToolbarCreated) ;
        //oViewer.addEventListener (Autodesk.Viewing.GEOMETRY_LOADED_EVENT, onViewerGeometryLoaded) ;
    }

    function loadModelInViewer (svfUrl, sharedPropertyDbPath) {
        oViewer.tearDown () ;
        oViewer.setUp (oViewer.config) ;
        var modelOptions ={ sharedPropertyDbPath: sharedPropertyDbPath } ;
        oViewer.loadModel (svfUrl, modelOptions, onModelLoaded, onError) ;
    }

    function onModelLoaded (model) {

    }

    function onError (viewerErrorCode) {
        alert ('Loading Error #' + viewerErrorCode) ;
    }

    function switchView (evt, role) {
        evt.stopPropagation () ;
        var index =role === '3d' ? 0 : 1000 ;
        var views =role === '3d' ? oViews3D : oViews2D ;

        var i =parseInt (evt.target.id.substring (5)) - index ;
        var guid =views [i].guid ;

        var viewObj =Autodesk.Viewing.Document.getSubItemsWithProperties (oDocument.getRootItem (), { 'type': 'geometry', 'role': role, 'guid': guid }, true) ;
        if ( viewObj.length == 0 )
            return ;
        var svfUrl =oDocument.getViewablePath (viewObj [0]) ;
        loadModelInViewer (svfUrl, oDocument.getPropertyDbPath ()) ;
    }
    


AutodeskNamespace("Autodesk.ADN.Viewing.Extension");
Autodesk.ADN.Viewing.Extension.Color = function(viewer, options) {

Autodesk.Viewing.Extension.call(this, viewer, options);
var overlayName = "temperary-colored-overlay";
var _self = this;
_self.load = function() {

    console.log('Autodesk.ADN.Viewing.Extension.Color loaded');
    ///////////////////////////////////////////////////////////////////////////
    // Generate GUID
    //
    ///////////////////////////////////////////////////////////////////////////
    function newGuid() {
        var d = new Date().getTime();
        var guid = 'xxxx-xxxx-xxxx-xxxx-xxxx'.replace(/[xy]/g, function(c) {
            var r = (d + Math.random() * 16) % 16 | 0;
            d = Math.floor(d / 16);
            return (c == 'x' ? r : (r & 0x7 | 0x8)).toString(16);
        });
        return guid;
    };

    ///////////////////////////////////////////////////////////////////////////
    // add new material
    //
    ///////////////////////////////////////////////////////////////////////////
    function addMaterial(color) {
        var material = new THREE.MeshPhongMaterial({
            color: color
        });
        //viewer.impl.matman().addMaterial(newGuid(), material);
        viewer.impl.createOverlayScene(overlayName, material, material);
        return material;
    }

    ///////////////////////////////////////////////////////////////////////////
    // Set color for nodes
    // objectIds should be an array of dbId
    // 
    //
    ///////////////////////////////////////////////////////////////////////////
    Autodesk.Viewing.Viewer3D.prototype.setColorMaterial = function(objectIds, color) {
        var material = addMaterial(color);

        for (var i=0; i<objectIds.length; i++) {

            var dbid = objectIds[i];

            //from dbid to node, to fragid
            var it = viewer.model.getData().instanceTree;

            it.enumNodeFragments(dbid, function (fragId) {

                
                var renderProxy = viewer.impl.getRenderProxy(viewer.model, fragId);
                
                renderProxy.meshProxy = new THREE.Mesh(renderProxy.geometry, renderProxy.material);

                renderProxy.meshProxy.matrix.copy(renderProxy.matrixWorld);
                renderProxy.meshProxy.matrixWorldNeedsUpdate = true;
                renderProxy.meshProxy.matrixAutoUpdate = false;
                renderProxy.meshProxy.frustumCulled = false;

                viewer.impl.addOverlay(overlayName, renderProxy.meshProxy);
                viewer.impl.invalidate(true);
                
            }, false);
        }

    }


    Autodesk.Viewing.Viewer3D.prototype.restoreColorMaterial = function(objectIds) {
   
        for (var i=0; i<objectIds.length; i++) {

            var dbid = objectIds[i];


            //from dbid to node, to fragid
            var it = viewer.model.getData().instanceTree;

            it.enumNodeFragments(dbid, function (fragId) {

                
                 var renderProxy = viewer.impl.getRenderProxy(viewer.model, fragId);

                if(renderProxy.meshProxy){

                  //remove all overlays with same name
                  viewer.impl.clearOverlay(overlayName);
                  //viewer.impl.removeOverlay(overlayName, renderProxy.meshProxy);
                  delete renderProxy.meshProxy;
                  

                  //refresh the sence
                  
                  viewer.impl.invalidate(true);


                }
                                     
            }, true);
        }


    }

    _self.unload = function() {
        console.log('Autodesk.ADN.Viewing.Extension.Color unloaded');
        return true;
    };
};

};
Autodesk.ADN.Viewing.Extension.Color.prototype = Object.create(Autodesk.Viewing.Extension.prototype);
Autodesk.ADN.Viewing.Extension.Color.prototype.constructor = Autodesk.ADN.Viewing.Extension.Color;
Autodesk.Viewing.theExtensionManager.registerExtension('Autodesk.ADN.Viewing.Extension.Color', Autodesk.ADN.Viewing.Extension.Color);


</script>
@endpush

<div id="project" class="container-fluid">
<div class="row">
    <div class="col-lg-9 ifm-no-padding-left" id="loadviewer">
        @include('bimmodels::loadproject')
        
    </div>
    {{--  <div class="col-lg-9 ifm-no-padding-left">
        <a href="/getviewer" class="btn btn-default" style="position:absolute;top:10px;left:25px;z-index:2">back</a>
        <!--<button id="changeurn" class="btn btn-default" style="position:absolute;top:10px;left:100px;z-index:2">Change</button> -->
    </div>  --}}
    <div class="col-lg-3 ifm-no-padding-right ifm-no-padding-left">
        <div id="list" class="right"></div>
    </div>
</div>
<br>
</div>


@push('scripts')
<script>
    $('#back').on('click', function(){
        $('#map').css({
            'z-index': '3'
        });
        $('.mapViewerLabel').text('Map');
        $('.mapViewerLabel').siblings().remove();
        $('.mapViewerLabel').after('<i class="fa fa-map"></i>');
    });
    $('#changeurn').on('click', function(){
        $.get('/loadurn',function(data){
            
            $.get('/loadproject',function(res){
                initializeAutodeskViewer (data.urn,data.token);
                $("#loadviewer").html(res);
                
            })
            
        })
    });
    $('#list').slimScroll({
        height: '664px',
        width: '100%'
    })
</script>
@endpush