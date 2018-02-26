/**
 * Refreshes the category tree 
 * 
 * @return {[type]} [description]
 */
function loadEditCategoriesTree(taxonomy_name) {
    var categoriesData;
    $.ajax({
        url: '/dashboard/categories/edit_json_tree/' + taxonomy_name,

        type: "GET",
        dataType: "json",
        async: false,
        success: function (data) {
            categoriesData = [data];
        },
        error: function (data) {
            console.log('error in editable_categories_tree.js loadEditCategoriesTree() ');
        }

    });
    var initSelectableTree = function () {
        return $('#treeview-selectable').treeview({
            data: categoriesData,
            multiSelect: false,

            /**
             * when a new node is selected 
             * change the input field to the node->id
             * 
             * @param  event [description]
             * @param  node  [description]
             * @return null
             */
            onNodeSelected: function (event, node) {
                $('#category_id_input').val(node.id);
            },
            // when unselected => set the value to the default 0
            onNodeUnselected: function (event, node) {
                $('#category_id_input').val(0);
            }
        });
    };
    var $selectableTree = initSelectableTree();

    var findSelectableNodes = function () {
        return $selectableTree.treeview('search', [
            $('#input-select-node').val(), {ignoreCase: false, exactMatch: false}
        ]);
    };
    var selectableNodes = findSelectableNodes();

    return true;
}