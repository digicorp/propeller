# Select

Select adds item selection capabilities to a DataTable. Items can be rows, columns or cells, which can be selected independently, or together. Item selection can be particularly useful in interactive tables where users can perform some action on the table such as editing.


# Installation

To use Select the best way to obtain the software is to use the [DataTables downloader](//datatables.net/download). You can also include the individual files from the [DataTables CDN](//cdn.datatables.net). See the [documentation](http://datatables.net/extensions/select/) for full details.


# Basic usage

Select is initialised using the `select` option in the DataTables constructor - a simple boolean `true` will enable the feature. Further options can be specified using this option as an object - see the documentation for details.

Example:

```js
$(document).ready( function () {
    $('#myTable').DataTable( {
    	select: true
    } );
} );
```


# Documentation / support

* [Documentation](https://datatables.net/extensions/select/)
* [DataTables support forums](http://datatables.net/forums)


# GitHub

If you fancy getting involved with the development of Select and help make it better, please refer to its [GitHub repo](https://github.com/DataTables/Select).

