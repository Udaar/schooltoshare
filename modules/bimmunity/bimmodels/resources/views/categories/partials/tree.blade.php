<div id="treeview-selectable" class=""></div>
{{ Form::hidden('category_id', null, ['id'=>'category_id_input'])}}
<div id="expandible-output"></div>
{{-- {{ Form::text('category_id',null , ['id'=>'category_id_input'])}} --}}


@push('head')
<link href="/metronic/assets/global/plugins/bootstrap-treeview/css/bootstrap-treeview.css" rel="stylesheet" type="text/css"/>

@endpush

@push('scripts')
<script src="/metronic/assets/global/plugins/bootstrap-treeview/js/bootstrap-treeview.js" type="text/javascript"></script>


<script>
	$(document).ready(function(){
		var taxonomy_name = "{{ $taxonomy_name }}";
		loadSelectCategoriesTree(taxonomy_name);

		// select the category in the tree based on category_id.
		// var catId = $('#category_id_input').val();
		// $('li[data-catid='+ catId +']').trigger("click");
	});
</script>
@endpush