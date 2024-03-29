<script>
		$(document).ready (function () {
			initializeAutodeskViewer () ;
			// Slim Scroll
			//$('.form-container').slimScroll({
				//height: '696px'
			//});
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

		var urn ="{{$urn}}" ;
		var token ="{{$token}}" ;
		function getAccessToken (onGetAccessToken) {
			onGetAccessToken (token, 82000) ;
		}

		var oDocument =null, oViewer =null ;
		var oViews3D =null, oViews2D =null ;

		function initializeAutodeskViewer () {
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
			if ( oViews3D.length > 0 )
				viewable =oViews3D [0] ;
			else if ( oViews2D.length > 0 )
				viewable =oViews2D [0] ;
			else
				return (alert ('ERROR: No 3D or 2D views found in this document!')) ;

			for ( var i =0 ; i < oViews3D.length ; i++ ) {
				var r =$('<div><button id="view_' + i + '" data="' + oViews3D [i].guid + '">' + oViews3D [i].name + '</button></div>') ;
				$('#list').append (r) ;
				$('#view_' + i).click (function (e) { switchView (e, '3d') ; }) ;
			}
			for ( var i =0, j =1000 ; i < oViews2D.length ; j++, i++ ) {
				var r =$('<div><button id="view_' + j + '" data="' + oViews2D [i].guid + '">' + oViews2D [i].name + '</button></div>') ;
				$('#list').append (r) ;
				$('#view_' + j).click (function (e) { switchView (e, '2d') ; }) ;
			}

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

    </script>