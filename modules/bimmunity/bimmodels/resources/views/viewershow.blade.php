@extends('layouts.app')

@section('content')
@include('bimmodels::bimviewer')
@endsection
@push('scripts')
<script>
$(window).load(function(){

	
});

$(document).on('change_color',function(event,oViewer){
	// console.log('Oviewer: ',oViewer);
	// // oViewer.loadExtension('Autodesk.ADN.Viewing.Extension.Color');
	// oViewer.setColorMaterial([13168],0xff0000);
 }) 
 $(document).on('viewer_selected',function(event,ob){
	// oViewer.setColorMaterial([13168],0xff0000);

    console.log("equipment id :",ob.dbIdArray[0]);
	oViewer.getProperties(ob.dbIdArray[0], function(res) {
		console.log("getProperties : ", res)
	});
	console.log('getdata: ',ob.model.getData());
	ob.model.getObjectTree(function(objTree) {
		console.log('objtree: ', objTree);
	});
 })   
</script>
@endpush