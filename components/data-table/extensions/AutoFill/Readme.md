# AutoFill

AutoFill gives an Excel like option to a DataTable to click and drag over multiple cells, filling in information over the selected cells and incrementing numbers as needed.


# Installation

To use AutoFill the best way to obtain the software is to use the [DataTables downloader](//datatables.net/download). You can also include the individual files from the [DataTables CDN](//cdn.datatables.net). See the [documentation](http://datatables.net/extensions/autofill/) for full details.


# Basic usage

AutoFill is initialised using the `autoFill` option in the DataTables constructor. Further options can be specified using this option as an object - see the documentation for details. For example:

```js
$(document).ready( function () {
    $('#example').DataTable( {
    	autoFill: true
    } );
} );
```


# Documentation / support

* [Documentation](https://datatables.net/extensions/autofill/)
* [DataTables support forums](http://datatables.net/forums)


# GitHub

If you fancy getting involved with the development of AutoFill and help make it better, please refer to its [GitHub repo](https://github.com/DataTables/AutoFill)

