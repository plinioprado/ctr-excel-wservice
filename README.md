# dashboard for Budget x Actual sales whith adoption curve - in Excel fed by webservice

Excel us still usefull because no mather how much tech people can make a rich interface, finance and business professionals want to model and simulate their Budget numbers.

An example shown here is modelling the sales budget growth according to adoption curves.

The connection to a simple webservice (itself later connected to a control application), is an alternative to the less safe and more labor intensive manual input that is still very common in the finance and business areas.

### Scope

This sample contains:
* Dashboard Excel sample: excel/dash.xlsm spreadsheet including documentation in the "Help" sheet and the modelling of a S logistic adoption curve
* Webservice: index.php provides the sales invoice JSON, based by a hardcoded database
* Viewer: viewer/index.html shows the JSON in the browser console through a Jquery http request   

### Stack

Frontend

* Html/Json
* Excel/VBA

Backend

* PHP

## Set up
---------

You can load these files in a test folder of your web server or just run them from http://www.immaginareservice.com.br/app/exasrvpm

## Tests
--------
* Read the JSON at http://www.immaginareservice.com.br/app/exasrvpm
* Dowload and open the Excel worksheet
** at http://www.immaginareservice.com.br/app/exasrvpm/excel/dash.xlsm
* Test if the webservice is loading
** In the DbWservice sheet, press "Import" and see if the 12 invoices will be loaded
* Test if the webservice also load from a PHP REST response file
** At the sheet "Param", in the cell for "url api" replace "https://immaginareservice.websiteseguro.com/app/exasrvpm/api/sales.json" for "https://immaginareservice.websiteseguro.com/app/exasrvpm/api/sales.php"
** See if the 12 invoices are still loaded
* Test if the Dashboard graphs work
** In the Param sheet, input 2 in "1-Excel/2-Wservice" and see if the graphs in the Dash sheet will still show te same picture

## Contribution guidelines
-----------
* We welcome any suggestion

## Who do I talk to? ##

* Plinio Prado
   plinio.prado@immaginare.com.br